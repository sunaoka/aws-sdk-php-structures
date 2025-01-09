<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $DataRetentionInHours
 * @property bool $Disabled
 * @property list<StreamingNotificationTarget> $StreamingNotificationTargets
 * @property MediaInsightsConfiguration $MediaInsightsConfiguration
 */
class StreamingConfiguration extends Shape
{
    /**
     * @param array{
     *     DataRetentionInHours: int<0, max>,
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
