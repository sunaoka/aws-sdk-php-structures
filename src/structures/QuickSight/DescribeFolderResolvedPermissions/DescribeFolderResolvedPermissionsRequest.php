<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolderResolvedPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 * @property string $Namespace
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeFolderResolvedPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string,
     *     Namespace?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
