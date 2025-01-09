<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $registryId
 */
class ReplicationDestination extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     registryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
