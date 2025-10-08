<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime;

class AugmentedAIRuntimeClient extends \Aws\AugmentedAIRuntime\AugmentedAIRuntimeClient
{
    use DeleteHumanLoop\DeleteHumanLoopTrait;
    use DescribeHumanLoop\DescribeHumanLoopTrait;
    use ListHumanLoops\ListHumanLoopsTrait;
    use StartHumanLoop\StartHumanLoopTrait;
    use StopHumanLoop\StopHumanLoopTrait;
}
