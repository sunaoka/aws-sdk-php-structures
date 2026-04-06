<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolderPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 */
class DescribeFolderPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
