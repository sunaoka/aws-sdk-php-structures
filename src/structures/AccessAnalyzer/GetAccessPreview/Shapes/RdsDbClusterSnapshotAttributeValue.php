<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountIds
 */
class RdsDbClusterSnapshotAttributeValue extends Shape
{
    /**
     * @param array{accountIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
