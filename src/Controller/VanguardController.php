<?php

namespace App\Controller;

use App\Service\VanguardApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VanguardController extends AbstractController
{
    #[Route('/vanguardCards', name: 'vanguard_cards')]
    public function index(VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/index.html.twig', [
            // United Sanctuary : Shadow Paladin, Oracle Think Tank, Royal Paladin
            'royal' => $VanguardApiService->getRoyalCards(),
            'oracle' => $VanguardApiService->getOracleCards(),
            'angel' => $VanguardApiService->getAngelCards(),
            'shadow' => $VanguardApiService->getShadowCards(),
            'gold' => $VanguardApiService->getGoldCards(),
            'genesis' => $VanguardApiService->getGenesisCards(),

            // Dragon Empire/Historical : Kagero , Nubatama, Tachikaze, Murakumo, Narukami
            'kagero' => $VanguardApiService->getKageroCards(),
            'nubatama' => $VanguardApiService->getNubatamaCards(),
            'tachikaze' => $VanguardApiService->getTachikazeCards(),
            'murakumo' => $VanguardApiService->getMurakumoCards(),
            'narukami' => $VanguardApiService->getNarukamiCards(),

            // Star Gate : Nova Grappler, Dimension Police, Link Joker

            'nova' => $VanguardApiService->getNovaGrapplerCards(),
            'dimension' => $VanguardApiService->getDimensionPoliceCards(),
            'link' => $VanguardApiService->getLinkJokerCards(),

            // Dark Zone : Spike Brothers, Dark Irregulars, Pale Moon, Gear Chronicle

            'spike' => $VanguardApiService->getSpikeBrothersCards(),
            'dark' => $VanguardApiService->getDarkIrregularsCards(),
            'pale' => $VanguardApiService->getPaleMoonCards(),
            'gear' => $VanguardApiService->getGearChronicleCards(),

            // Magallanica : Granblue, Bermuda Triangle, Aqua Force
            'granblue' => $VanguardApiService->getGranblueCards(),
            'bermuda' => $VanguardApiService->getBermudaTriangleCards(),
            'aqua' => $VanguardApiService->getAquaForceCards(),

            // Zoo : Megacolony, Great Nature, Neo Nectar

            'megacolony' => $VanguardApiService->getMegacolonyCards(),
            'great' => $VanguardApiService->getGreatNatureCards(),
            'neo' => $VanguardApiService->getNeoNectarCards(),
        ]);

    }

    #[Route('/card/{id}', name: 'detail_card')]
    public function detailCard(string $id, VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/detail/detail.html.twig', [
            'card' => $VanguardApiService->getDetailCard($id),
        ]);
    }

    #[Route('/card/clan/{clan}', name: 'detail_clan')]
    public function detailClan(string $clan, VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/detail/detailClan.html.twig', [
            'clan' => $VanguardApiService->getDetailClan($clan),
        ]);
    }
    #[Route('/card/grade/{grade}', name: 'detail_grade')]
    public function detailGrade(string $grade, VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/detail/detailGrade.html.twig', [
            'grade' => $VanguardApiService->getDetailGrade($grade),
        ]);
    }
    #[Route('/card/race/{race}', name: 'detail_race')]
    public function detailRace(string $race, VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/detail/detailRace.html.twig', [
            'race' => $VanguardApiService->getDetailRace($race),
        ]);
    }
    #[Route('/card/nation/{nation}', name: 'detail_nation')]
    public function detailNation(string $nation, VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/detail/detailNation.html.twig', [
            'nation' => $VanguardApiService->getDetailNation($nation),
        ]);
    }
    #[Route('/card/power/{power}', name: 'detail_power')]
    public function detailPower(string $power, VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/detail/detailPower.html.twig', [
            'power' => $VanguardApiService->getDetailPower($power),
        ]);
    }
    #[Route('/card/shield/{shield}', name: 'detail_shield')]
    public function detailShield(string $shield, VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/detail/detailShield.html.twig', [
            'shield' => $VanguardApiService->getDetailShield($shield),
        ]);
    }

    #[Route('/card/cardtype/{cardtype}', name: 'detail_cardtype')]
    public function detailCardType(string $cardtype, VanguardApiService $VanguardApiService) : Response
    {
        return $this->render('vanguard/detail/detailCardType.html.twig', [
            'cardtype' => $VanguardApiService->getDetailCardType($cardtype),
        ]);
    }
}
