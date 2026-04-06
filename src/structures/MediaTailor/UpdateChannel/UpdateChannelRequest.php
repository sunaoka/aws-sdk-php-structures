<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Audiences
 * @property string $ChannelName
 * @property Shapes\SlateSource|null $FillerSlate
 * @property list<Shapes\RequestOutputItem> $Outputs
 * @property Shapes\TimeShiftConfiguration|null $TimeShiftConfiguration
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     Audiences?: list<string>|null,
     *     ChannelName: string,
     *     FillerSlate?: Shapes\SlateSource|null,
     *     Outputs: list<Shapes\RequestOutputItem>,
     *     TimeShiftConfiguration?: Shapes\TimeShiftConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
