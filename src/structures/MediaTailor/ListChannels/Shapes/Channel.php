<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $Audiences
 * @property string $ChannelName
 * @property string $ChannelState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property SlateSource $FillerSlate
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property LogConfigurationForChannel $LogConfiguration
 * @property list<ResponseOutputItem> $Outputs
 * @property string $PlaybackMode
 * @property array<string, string> $Tags
 * @property string $Tier
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Audiences?: list<string>,
     *     ChannelName: string,
     *     ChannelState: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     FillerSlate?: SlateSource,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LogConfiguration: LogConfigurationForChannel,
     *     Outputs: list<ResponseOutputItem>,
     *     PlaybackMode: string,
     *     Tags?: array<string, string>,
     *     Tier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
