<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $DataRetentionInHours
 * @property bool|null $Disabled
 * @property list<StreamingNotificationTarget>|null $StreamingNotificationTargets
 */
class StreamingConfiguration extends Shape
{
    /**
     * @param array{
     *     DataRetentionInHours: int<0, max>,
     *     Disabled?: bool|null,
     *     StreamingNotificationTargets?: list<StreamingNotificationTarget>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
