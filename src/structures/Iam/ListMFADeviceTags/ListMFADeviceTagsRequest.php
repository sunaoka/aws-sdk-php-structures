<?php

namespace Sunaoka\Aws\Structures\Iam\ListMFADeviceTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SerialNumber
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListMFADeviceTagsRequest extends Request
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
