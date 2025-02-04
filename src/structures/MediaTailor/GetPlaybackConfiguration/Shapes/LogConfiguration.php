<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PercentEnabled
 * @property list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'>|null $EnabledLoggingStrategies
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     PercentEnabled: int,
     *     EnabledLoggingStrategies?: list<'VENDED_LOGS'|'LEGACY_CLOUDWATCH'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
