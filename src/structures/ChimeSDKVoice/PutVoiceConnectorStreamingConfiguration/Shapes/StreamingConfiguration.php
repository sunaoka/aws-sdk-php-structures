<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataRetentionInHours
 * @property bool $Disabled
 * @property list<StreamingNotificationTarget> $StreamingNotificationTargets
 * @property MediaInsightsConfiguration $MediaInsightsConfiguration
 */
class StreamingConfiguration extends Shape
{
    /**
     * @param array{
     *     DataRetentionInHours: int,
     *     Disabled: bool,
     *     StreamingNotificationTargets?: list<StreamingNotificationTarget>,
     *     MediaInsightsConfiguration?: MediaInsightsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
