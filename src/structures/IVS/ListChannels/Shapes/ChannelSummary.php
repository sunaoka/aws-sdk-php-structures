<?php

namespace Sunaoka\Aws\Structures\IVS\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property bool $authorized
 * @property bool $insecureIngest
 * @property 'NORMAL'|'LOW' $latencyMode
 * @property string $name
 * @property string $playbackRestrictionPolicyArn
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY' $preset
 * @property string $recordingConfigurationArn
 * @property array<string, string> $tags
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD' $type
 */
class ChannelSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     authorized?: bool,
     *     insecureIngest?: bool,
     *     latencyMode?: 'NORMAL'|'LOW',
     *     name?: string,
     *     playbackRestrictionPolicyArn?: string,
     *     preset?: 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY',
     *     recordingConfigurationArn?: string,
     *     tags?: array<string, string>,
     *     type?: 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
