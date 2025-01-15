<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $emailAddress
 * @property string|null $name
 */
class AWSAccount extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     emailAddress?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
