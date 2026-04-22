<?php

namespace Sunaoka\Aws\Structures\IVS\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'NORMAL'|'LOW'|null $latencyMode
 * @property bool|null $authorized
 * @property string|null $recordingConfigurationArn
 * @property array<string, string>|null $tags
 * @property bool|null $insecureIngest
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null $type
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null $preset
 * @property string|null $playbackRestrictionPolicyArn
 * @property string|null $adConfigurationArn
 */
class ChannelSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     latencyMode?: 'NORMAL'|'LOW'|null,
     *     authorized?: bool|null,
     *     recordingConfigurationArn?: string|null,
     *     tags?: array<string, string>|null,
     *     insecureIngest?: bool|null,
     *     type?: 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null,
     *     preset?: 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null,
     *     playbackRestrictionPolicyArn?: string|null,
     *     adConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
