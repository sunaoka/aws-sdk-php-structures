<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $accountIds
 */
class RdsDbClusterSnapshotAttributeValue extends Shape
{
    /**
     * @param array{accountIds?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
