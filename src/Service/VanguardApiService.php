<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class VanguardApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    // United Sanctuary : Royal, Oracle, Angel, Shadow,Gold, Genesis
    public function getRoyalCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=royal%20paladin&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getOracleCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Oracle%20Think%20Tank&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getAngelCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Angel%20Feather&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getShadowCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=shadow%20paladin&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getGoldCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=gold%20paladin&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getGenesisCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=genesis&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    // Dragon Empire/Historical : Kagero , Nubatama, Tachikaze, Murakumo, Narukami

    public function getKageroCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=kagero&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getNubatamaCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Nubatama&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getTachikazeCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Tachikaze&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getMurakumoCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Murakumo&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }
    public function getNarukamiCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Narukami&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    // Star Gate : Nova Grappler, Dimension Police, Link Joker

    public function getNovaGrapplerCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Nova%20Grappler&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getDimensionPoliceCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=dimension%20police&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getLinkJokerCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Link%20Joker&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    // Dark Zone : Spike Brothers, Dark Irregulars, Pale Moon, Gear Chronicle

    public function getSpikeBrothersCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Spike%20Brothers&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getDarkIrregularsCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Dark%20Irregulars&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getPaleMoonCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Pale%20Moon&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getGearChronicleCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Gear%20Chronicle&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    // Magallanica : Granblue, Bermuda Triangle, Aqua Force

    public function getGranblueCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Granblue&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getBermudaTriangleCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Bermuda%20Triangle&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getAquaForceCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Aqua%20Force&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    // Zoo : Megacolony, Great Nature, Neo Nectar

    public function getMegacolonyCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Megacolony&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getGreatNatureCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Great%20Nature&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    public function getNeoNectarCards() : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=Neo%20Nectar&page=1&pagesize=10&format=premium%20standard'
        );

        return $response->toArray();
    }

    // Detail d'une carte
    public function getDetailCard($id) : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/card?id=' . $id . ''
        );
        return $response->toArray();
    }

    // Detail d'un clan
    public function getDetailClan($clan) : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?clan=' . $clan . '&format=premium%20standard'
        );
        return $response->toArray();

    }
    public function getDetailGrade($grade) : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?grade=' . $grade . '&format=premium%20standard'
        );
        return $response->toArray();

    }
    public function getDetailRace($race) : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?race=' . $race . '&format=premium%20standard'
        );
        return $response->toArray();

    }
    public function getDetailNation($nation) : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?nation=' . $nation . '&format=premium%20standard'
        );
        return $response->toArray();

    }
    public function getDetailPower($power) : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?power=' . $power . '&format=premium%20standard'
        );
        return $response->toArray();

    }
    public function getDetailShield($shield) : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?shield=' . $shield . '&format=premium%20standard'
        );
        return $response->toArray();

    }
    public function getDetailCardType($type) : array
    {
        $response = $this->client->request(
            'GET',
            'https://card-fight-vanguard-api.ue.r.appspot.com/api/v1/cards?cardtype=' . $type . '&format=premium%20standard'
        );
        return $response->toArray();

    }
}
