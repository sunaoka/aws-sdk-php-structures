<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListAccountPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLE_SCANNING'|'DISABLE_SCANNING'|'ENABLE_REPOSITORY'|'DISABLE_REPOSITORY' $operation
 * @property 'EC2'|'ECR'|'LAMBDA' $service
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     operation: 'ENABLE_SCANNING'|'DISABLE_SCANNING'|'ENABLE_REPOSITORY'|'DISABLE_REPOSITORY',
     *     service: 'EC2'|'ECR'|'LAMBDA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
