<?php

namespace Sunaoka\Aws\Structures\Iam\ListServiceSpecificCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string|null $ServiceName
 * @property bool|null $AllUsers
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListServiceSpecificCredentialsRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     ServiceName?: string|null,
     *     AllUsers?: bool|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
