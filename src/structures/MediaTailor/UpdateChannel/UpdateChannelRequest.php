<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Audiences
 * @property string $ChannelName
 * @property Shapes\SlateSource $FillerSlate
 * @property list<Shapes\RequestOutputItem> $Outputs
 * @property Shapes\TimeShiftConfiguration $TimeShiftConfiguration
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     Audiences?: list<string>,
     *     ChannelName: string,
     *     FillerSlate?: Shapes\SlateSource,
     *     Outputs: list<Shapes\RequestOutputItem>,
     *     TimeShiftConfiguration?: Shapes\TimeShiftConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
