<?php

namespace Sunaoka\Aws\Structures\Panorama\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUSINESS_LOGIC'|'ML_MODEL'|'MEDIA_SOURCE'|'MEDIA_SINK' $Category
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string|null $Description
 * @property string $Name
 * @property string $NodeId
 * @property string|null $OwnerAccount
 * @property string|null $PackageArn
 * @property string $PackageId
 * @property string $PackageName
 * @property string $PackageVersion
 * @property string $PatchVersion
 */
class Node extends Shape
{
    /**
     * @param array{
     *     Category: 'BUSINESS_LOGIC'|'ML_MODEL'|'MEDIA_SOURCE'|'MEDIA_SINK',
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     Description?: string|null,
     *     Name: string,
     *     NodeId: string,
     *     OwnerAccount?: string|null,
     *     PackageArn?: string|null,
     *     PackageId: string,
     *     PackageName: string,
     *     PackageVersion: string,
     *     PatchVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
