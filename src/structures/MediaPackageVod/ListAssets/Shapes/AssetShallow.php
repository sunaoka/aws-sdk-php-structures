<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreatedAt
 * @property string $Id
 * @property string $PackagingGroupId
 * @property string $ResourceId
 * @property string $SourceArn
 * @property string $SourceRoleArn
 * @property array<string, string> $Tags
 */
class AssetShallow extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedAt?: string,
     *     Id?: string,
     *     PackagingGroupId?: string,
     *     ResourceId?: string,
     *     SourceArn?: string,
     *     SourceRoleArn?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
