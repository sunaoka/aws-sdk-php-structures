<?php

namespace Sunaoka\Aws\Structures\IVS\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property bool|null $authorized
 * @property 'TS'|'FRAGMENTED_MP4'|null $containerFormat
 * @property string|null $ingestEndpoint
 * @property bool|null $insecureIngest
 * @property 'NORMAL'|'LOW'|null $latencyMode
 * @property MultitrackInputConfiguration|null $multitrackInputConfiguration
 * @property string|null $name
 * @property string|null $playbackRestrictionPolicyArn
 * @property string|null $playbackUrl
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null $preset
 * @property string|null $recordingConfigurationArn
 * @property Srt|null $srt
 * @property array<string, string>|null $tags
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null $type
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     authorized?: bool|null,
     *     containerFormat?: 'TS'|'FRAGMENTED_MP4'|null,
     *     ingestEndpoint?: string|null,
     *     insecureIngest?: bool|null,
     *     latencyMode?: 'NORMAL'|'LOW'|null,
     *     multitrackInputConfiguration?: MultitrackInputConfiguration|null,
     *     name?: string|null,
     *     playbackRestrictionPolicyArn?: string|null,
     *     playbackUrl?: string|null,
     *     preset?: 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY'|null,
     *     recordingConfigurationArn?: string|null,
     *     srt?: Srt|null,
     *     tags?: array<string, string>|null,
     *     type?: 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
