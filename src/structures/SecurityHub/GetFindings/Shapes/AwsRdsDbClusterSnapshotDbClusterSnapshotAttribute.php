<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property list<string> $AttributeValues
 */
class AwsRdsDbClusterSnapshotDbClusterSnapshotAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     AttributeValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
