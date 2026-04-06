<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxWindows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property string|null $Domain
 * @property string|null $User
 * @property string|null $Password
 */
class UpdateLocationFsxWindowsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     Domain?: string|null,
     *     User?: string|null,
     *     Password?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
