<?php

namespace Sunaoka\Aws\Structures\IVS\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'NORMAL'|'LOW'|null $latencyMode
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null $type
 * @property string|null $recordingConfigurationArn
 * @property string|null $ingestEndpoint
 * @property string|null $playbackUrl
 * @property bool|null $authorized
 * @property array<string, string>|null $tags
 * @property bool|null $insecureIngest
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null $preset
 * @property Srt|null $srt
 * @property string|null $playbackRestrictionPolicyArn
 * @property MultitrackInputConfiguration|null $multitrackInputConfiguration
 * @property 'TS'|'FRAGMENTED_MP4'|null $containerFormat
 * @property string|null $adConfigurationArn
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     latencyMode?: 'NORMAL'|'LOW'|null,
     *     type?: 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null,
     *     recordingConfigurationArn?: string|null,
     *     ingestEndpoint?: string|null,
     *     playbackUrl?: string|null,
     *     authorized?: bool|null,
     *     tags?: array<string, string>|null,
     *     insecureIngest?: bool|null,
     *     preset?: 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null,
     *     srt?: Srt|null,
     *     playbackRestrictionPolicyArn?: string|null,
     *     multitrackInputConfiguration?: MultitrackInputConfiguration|null,
     *     containerFormat?: 'TS'|'FRAGMENTED_MP4'|null,
     *     adConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
