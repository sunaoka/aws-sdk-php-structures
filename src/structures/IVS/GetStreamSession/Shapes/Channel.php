<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property bool $authorized
 * @property 'TS'|'FRAGMENTED_MP4' $containerFormat
 * @property string $ingestEndpoint
 * @property bool $insecureIngest
 * @property 'NORMAL'|'LOW' $latencyMode
 * @property MultitrackInputConfiguration $multitrackInputConfiguration
 * @property string $name
 * @property string $playbackRestrictionPolicyArn
 * @property string $playbackUrl
 * @property 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY' $preset
 * @property string $recordingConfigurationArn
 * @property Srt $srt
 * @property array<string, string> $tags
 * @property 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD' $type
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     authorized?: bool,
     *     containerFormat?: 'TS'|'FRAGMENTED_MP4',
     *     ingestEndpoint?: string,
     *     insecureIngest?: bool,
     *     latencyMode?: 'NORMAL'|'LOW',
     *     multitrackInputConfiguration?: MultitrackInputConfiguration,
     *     name?: string,
     *     playbackRestrictionPolicyArn?: string,
     *     playbackUrl?: string,
     *     preset?: 'HIGHER_BANDWIDTH_DELIVERY'|'CONSTRAINED_BANDWIDTH_DELIVERY',
     *     recordingConfigurationArn?: string,
     *     srt?: Srt,
     *     tags?: array<string, string>,
     *     type?: 'BASIC'|'STANDARD'|'ADVANCED_SD'|'ADVANCED_HD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
