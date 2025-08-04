<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListAccountPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2'|'ECR'|'LAMBDA' $service
 * @property 'ENABLE_SCANNING'|'DISABLE_SCANNING'|'ENABLE_REPOSITORY'|'DISABLE_REPOSITORY' $operation
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     service: 'EC2'|'ECR'|'LAMBDA',
     *     operation: 'ENABLE_SCANNING'|'DISABLE_SCANNING'|'ENABLE_REPOSITORY'|'DISABLE_REPOSITORY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
