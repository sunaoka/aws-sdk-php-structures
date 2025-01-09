<?php

namespace Sunaoka\Aws\Structures\IVS\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $authorized
 * @property 'TS'|'FRAGMENTED_MP4' $containerFormat
 * @property bool $insecureIngest
 * @property 'NORMAL'|'LOW' $latencyMode
 * @property Shapes\MultitrackInputConfiguration $multitrackInputConfiguration
 * @property string $name
 * @property string $playbackRestrictionPolicyArn
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY' $preset
 * @property string $recordingConfigurationArn
 * @property array<string, string> $tags
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD' $type
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     authorized?: bool,
     *     containerFormat?: 'TS'|'FRAGMENTED_MP4',
     *     insecureIngest?: bool,
     *     latencyMode?: 'NORMAL'|'LOW',
     *     multitrackInputConfiguration?: Shapes\MultitrackInputConfiguration,
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
