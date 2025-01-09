<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDeviceTransfers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $TransferType
 */
class ListInputDeviceTransfersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     TransferType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
