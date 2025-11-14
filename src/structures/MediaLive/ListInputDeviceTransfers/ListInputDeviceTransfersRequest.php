<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDeviceTransfers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property string $TransferType
 */
class ListInputDeviceTransfersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     TransferType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
