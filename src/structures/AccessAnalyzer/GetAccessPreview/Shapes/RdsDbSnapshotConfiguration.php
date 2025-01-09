<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, RdsDbSnapshotAttributeValue> $attributes
 * @property string $kmsKeyId
 */
class RdsDbSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, RdsDbSnapshotAttributeValue>,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
