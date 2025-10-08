<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver;

class SimSpaceWeaverClient extends \Aws\SimSpaceWeaver\SimSpaceWeaverClient
{
    use CreateSnapshot\CreateSnapshotTrait;
    use DeleteApp\DeleteAppTrait;
    use DeleteSimulation\DeleteSimulationTrait;
    use DescribeApp\DescribeAppTrait;
    use DescribeSimulation\DescribeSimulationTrait;
    use ListApps\ListAppsTrait;
    use ListSimulations\ListSimulationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartApp\StartAppTrait;
    use StartClock\StartClockTrait;
    use StartSimulation\StartSimulationTrait;
    use StopApp\StopAppTrait;
    use StopClock\StopClockTrait;
    use StopSimulation\StopSimulationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
