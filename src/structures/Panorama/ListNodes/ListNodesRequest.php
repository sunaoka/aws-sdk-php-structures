<?php

namespace Sunaoka\Aws\Structures\Panorama\ListNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BUSINESS_LOGIC'|'ML_MODEL'|'MEDIA_SOURCE'|'MEDIA_SINK'|null $Category
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $OwnerAccount
 * @property string|null $PackageName
 * @property string|null $PackageVersion
 * @property string|null $PatchVersion
 */
class ListNodesRequest extends Request
{
    /**
     * @param array{
     *     Category?: 'BUSINESS_LOGIC'|'ML_MODEL'|'MEDIA_SOURCE'|'MEDIA_SINK'|null,
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null,
     *     OwnerAccount?: string|null,
     *     PackageName?: string|null,
     *     PackageVersion?: string|null,
     *     PatchVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
