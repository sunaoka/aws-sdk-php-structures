<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string $Subdirectory
 * @property string $Domain
 * @property string $User
 * @property string $Password
 */
class UpdateLocationFsxWindowsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string,
     *     Domain?: string,
     *     User?: string,
     *     Password?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
