<?php

namespace Sunaoka\Aws\Structures\Iam\ListAccessKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListAccessKeysRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
