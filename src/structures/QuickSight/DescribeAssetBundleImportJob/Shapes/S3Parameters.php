<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManifestFileLocation $ManifestFileLocation
 * @property string|null $RoleArn
 */
class S3Parameters extends Shape
{
    /**
     * @param array{
     *     ManifestFileLocation: ManifestFileLocation,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
