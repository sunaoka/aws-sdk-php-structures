<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolderPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 * @property string $Namespace
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeFolderPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string,
     *     Namespace?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
