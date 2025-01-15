<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CreatedAt
 * @property string|null $Id
 * @property string|null $PackagingGroupId
 * @property string|null $ResourceId
 * @property string|null $SourceArn
 * @property string|null $SourceRoleArn
 * @property array<string, string>|null $Tags
 */
class AssetShallow extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedAt?: string|null,
     *     Id?: string|null,
     *     PackagingGroupId?: string|null,
     *     ResourceId?: string|null,
     *     SourceArn?: string|null,
     *     SourceRoleArn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
