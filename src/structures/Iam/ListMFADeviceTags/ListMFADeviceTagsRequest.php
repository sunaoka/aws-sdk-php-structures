<?php

namespace Sunaoka\Aws\Structures\Iam\ListMFADeviceTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SerialNumber
 * @property string $Marker
 * @property int $MaxItems
 */
class ListMFADeviceTagsRequest extends Request
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
