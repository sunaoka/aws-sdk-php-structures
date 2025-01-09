<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListManagedEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property string $certificateData
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string,
     *     certificateData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
