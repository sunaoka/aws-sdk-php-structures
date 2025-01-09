<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, RdsDbClusterSnapshotAttributeValue> $attributes
 * @property string $kmsKeyId
 */
class RdsDbClusterSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, RdsDbClusterSnapshotAttributeValue>,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
