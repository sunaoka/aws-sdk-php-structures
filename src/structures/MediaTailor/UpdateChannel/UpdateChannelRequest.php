<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property Shapes\SlateSource|null $FillerSlate
 * @property list<Shapes\RequestOutputItem> $Outputs
 * @property Shapes\TimeShiftConfiguration|null $TimeShiftConfiguration
 * @property list<string>|null $Audiences
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     FillerSlate?: Shapes\SlateSource|null,
     *     Outputs: list<Shapes\RequestOutputItem>,
     *     TimeShiftConfiguration?: Shapes\TimeShiftConfiguration|null,
     *     Audiences?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
