<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDeviceTransfers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $TransferType
 */
class ListInputDeviceTransfersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     TransferType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
