<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManifestFileLocation $ManifestFileLocation
 * @property string $RoleArn
 */
class S3Parameters extends Shape
{
    /**
     * @param array{
     *     ManifestFileLocation: ManifestFileLocation,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
