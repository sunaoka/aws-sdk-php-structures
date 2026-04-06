<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property Shapes\SlateSource|null $FillerSlate
 * @property list<Shapes\RequestOutputItem> $Outputs
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     FillerSlate?: Shapes\SlateSource|null,
     *     Outputs: list<Shapes\RequestOutputItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
