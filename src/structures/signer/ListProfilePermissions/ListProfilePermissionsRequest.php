<?php

namespace Sunaoka\Aws\Structures\signer\ListProfilePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property string $nextToken
 */
class ListProfilePermissionsRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
