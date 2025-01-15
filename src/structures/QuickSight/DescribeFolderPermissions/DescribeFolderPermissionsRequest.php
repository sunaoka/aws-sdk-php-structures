<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeFolderPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 * @property string|null $Namespace
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeFolderPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string,
     *     Namespace?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
