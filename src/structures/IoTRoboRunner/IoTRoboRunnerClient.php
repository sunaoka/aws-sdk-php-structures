<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner;

class IoTRoboRunnerClient extends \Aws\IoTRoboRunner\IoTRoboRunnerClient
{
    use CreateDestination\CreateDestinationTrait;
    use CreateSite\CreateSiteTrait;
    use CreateWorker\CreateWorkerTrait;
    use CreateWorkerFleet\CreateWorkerFleetTrait;
    use DeleteDestination\DeleteDestinationTrait;
    use DeleteSite\DeleteSiteTrait;
    use DeleteWorker\DeleteWorkerTrait;
    use DeleteWorkerFleet\DeleteWorkerFleetTrait;
    use GetDestination\GetDestinationTrait;
    use GetSite\GetSiteTrait;
    use GetWorker\GetWorkerTrait;
    use GetWorkerFleet\GetWorkerFleetTrait;
    use ListDestinations\ListDestinationsTrait;
    use ListSites\ListSitesTrait;
    use ListWorkerFleets\ListWorkerFleetsTrait;
    use ListWorkers\ListWorkersTrait;
    use UpdateDestination\UpdateDestinationTrait;
    use UpdateSite\UpdateSiteTrait;
    use UpdateWorker\UpdateWorkerTrait;
    use UpdateWorkerFleet\UpdateWorkerFleetTrait;
}
