<?php

namespace Sunaoka\Aws\Structures\Continuum\ListAssociatedEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $environmentId
 * @property string $environmentArn
 * @property string $name
 * @property 'ACTIVE' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class AssociatedEnvironment extends Shape
{
    /**
     * @param array{
     *     environmentId: string,
     *     environmentArn: string,
     *     name: string,
     *     status: 'ACTIVE',
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
