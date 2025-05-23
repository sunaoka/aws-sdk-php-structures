<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountIds
 */
class RdsDbSnapshotAttributeValue extends Shape
{
    /**
     * @param array{accountIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
