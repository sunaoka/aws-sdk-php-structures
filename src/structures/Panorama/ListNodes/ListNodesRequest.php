<?php

namespace Sunaoka\Aws\Structures\Panorama\ListNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BUSINESS_LOGIC'|'ML_MODEL'|'MEDIA_SOURCE'|'MEDIA_SINK' $Category
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $OwnerAccount
 * @property string $PackageName
 * @property string $PackageVersion
 * @property string $PatchVersion
 */
class ListNodesRequest extends Request
{
    /**
     * @param array{
     *     Category?: 'BUSINESS_LOGIC'|'ML_MODEL'|'MEDIA_SOURCE'|'MEDIA_SINK',
     *     MaxResults?: int,
     *     NextToken?: string,
     *     OwnerAccount?: string,
     *     PackageName?: string,
     *     PackageVersion?: string,
     *     PatchVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
