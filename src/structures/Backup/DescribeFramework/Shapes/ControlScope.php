<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ComplianceResourceIds
 * @property list<string>|null $ComplianceResourceTypes
 * @property array<string, string>|null $Tags
 */
class ControlScope extends Shape
{
    /**
     * @param array{
     *     ComplianceResourceIds?: list<string>|null,
     *     ComplianceResourceTypes?: list<string>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
