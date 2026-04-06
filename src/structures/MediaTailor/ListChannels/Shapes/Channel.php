<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ChannelName
 * @property string $ChannelState
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property SlateSource|null $FillerSlate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<ResponseOutputItem> $Outputs
 * @property string $PlaybackMode
 * @property array<string, string>|null $Tags
 * @property string $Tier
 * @property LogConfigurationForChannel $LogConfiguration
 * @property list<string>|null $Audiences
 */
class Channel extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ChannelName: string,
     *     ChannelState: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FillerSlate?: SlateSource|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Outputs: list<ResponseOutputItem>,
     *     PlaybackMode: string,
     *     Tags?: array<string, string>|null,
     *     Tier: string,
     *     LogConfiguration: LogConfigurationForChannel,
     *     Audiences?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
