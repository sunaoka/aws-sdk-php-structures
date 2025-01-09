<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Audiences
 * @property string $ChannelName
 * @property Shapes\SlateSource $FillerSlate
 * @property list<Shapes\RequestOutputItem> $Outputs
 * @property 'LOOP'|'LINEAR' $PlaybackMode
 * @property array<string, string> $Tags
 * @property 'BASIC'|'STANDARD' $Tier
 * @property Shapes\TimeShiftConfiguration $TimeShiftConfiguration
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     Audiences?: list<string>,
     *     ChannelName: string,
     *     FillerSlate?: Shapes\SlateSource,
     *     Outputs: list<Shapes\RequestOutputItem>,
     *     PlaybackMode: 'LOOP'|'LINEAR',
     *     Tags?: array<string, string>,
     *     Tier?: 'BASIC'|'STANDARD',
     *     TimeShiftConfiguration?: Shapes\TimeShiftConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
