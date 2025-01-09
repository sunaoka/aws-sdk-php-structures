<?php

namespace Sunaoka\Aws\Structures\Panorama\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUSINESS_LOGIC'|'ML_MODEL'|'MEDIA_SOURCE'|'MEDIA_SINK' $Category
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $Description
 * @property string $Name
 * @property string $NodeId
 * @property string $OwnerAccount
 * @property string $PackageArn
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
     *     Description?: string,
     *     Name: string,
     *     NodeId: string,
     *     OwnerAccount?: string,
     *     PackageArn?: string,
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
