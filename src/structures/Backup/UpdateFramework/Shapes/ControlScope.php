<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ComplianceResourceIds
 * @property list<string> $ComplianceResourceTypes
 * @property array<string, string> $Tags
 */
class ControlScope extends Shape
{
    /**
     * @param array{
     *     ComplianceResourceIds?: list<string>,
     *     ComplianceResourceTypes?: list<string>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
