<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, RdsDbSnapshotAttributeValue>|null $attributes
 * @property string|null $kmsKeyId
 */
class RdsDbSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, RdsDbSnapshotAttributeValue>|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
