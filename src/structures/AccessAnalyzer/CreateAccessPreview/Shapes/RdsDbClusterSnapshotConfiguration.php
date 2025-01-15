<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, RdsDbClusterSnapshotAttributeValue>|null $attributes
 * @property string|null $kmsKeyId
 */
class RdsDbClusterSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, RdsDbClusterSnapshotAttributeValue>|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
