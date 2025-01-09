<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FailoverConditionSettings $FailoverConditionSettings
 */
class FailoverCondition extends Shape
{
    /**
     * @param array{FailoverConditionSettings?: FailoverConditionSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
