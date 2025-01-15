<?php

namespace Sunaoka\Aws\Structures\Iam\ListSSHPublicKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListSSHPublicKeysRequest extends Request
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
