<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $DataRetentionInHours
 * @property bool $Disabled
 * @property list<StreamingNotificationTarget> $StreamingNotificationTargets
 */
class StreamingConfiguration extends Shape
{
    /**
     * @param array{
     *     DataRetentionInHours: int<0, max>,
     *     Disabled?: bool,
     *     StreamingNotificationTargets?: list<StreamingNotificationTarget>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
