<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $emailAddress
 * @property string $name
 */
class AWSAccount extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     emailAddress?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
