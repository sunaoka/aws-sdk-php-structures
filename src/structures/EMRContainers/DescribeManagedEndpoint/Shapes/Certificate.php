<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeManagedEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateArn
 * @property string|null $certificateData
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string|null,
     *     certificateData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
