<?php

namespace Sunaoka\Aws\Structures\Iam\ListMFADeviceTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SerialNumber
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListMFADeviceTagsRequest extends Request
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
