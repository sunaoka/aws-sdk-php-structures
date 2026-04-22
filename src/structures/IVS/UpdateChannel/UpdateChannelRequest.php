<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property 'NORMAL'|'LOW'|null $latencyMode
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null $type
 * @property bool|null $authorized
 * @property string|null $recordingConfigurationArn
 * @property bool|null $insecureIngest
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null $preset
 * @property string|null $playbackRestrictionPolicyArn
 * @property Shapes\MultitrackInputConfiguration|null $multitrackInputConfiguration
 * @property 'TS'|'FRAGMENTED_MP4'|null $containerFormat
 * @property string|null $adConfigurationArn
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     latencyMode?: 'NORMAL'|'LOW'|null,
     *     type?: 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null,
     *     authorized?: bool|null,
     *     recordingConfigurationArn?: string|null,
     *     insecureIngest?: bool|null,
     *     preset?: 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null,
     *     playbackRestrictionPolicyArn?: string|null,
     *     multitrackInputConfiguration?: Shapes\MultitrackInputConfiguration|null,
     *     containerFormat?: 'TS'|'FRAGMENTED_MP4'|null,
     *     adConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
