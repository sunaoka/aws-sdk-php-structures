<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string>|null $Audiences
 * @property string $ChannelName
 * @property string $ChannelState
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property SlateSource|null $FillerSlate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property LogConfigurationForChannel $LogConfiguration
 * @property list<ResponseOutputItem> $Outputs
 * @property string $PlaybackMode
 * @property array<string, string>|null $Tags
 * @property string $Tier
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Audiences?: list<string>|null,
     *     ChannelName: string,
     *     ChannelState: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FillerSlate?: SlateSource|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LogConfiguration: LogConfigurationForChannel,
     *     Outputs: list<ResponseOutputItem>,
     *     PlaybackMode: string,
     *     Tags?: array<string, string>|null,
     *     Tier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
