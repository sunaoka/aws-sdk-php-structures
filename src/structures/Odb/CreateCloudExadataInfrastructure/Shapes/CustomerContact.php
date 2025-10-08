<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudExadataInfrastructure\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $email
 */
class CustomerContact extends Shape
{
    /**
     * @param array{email?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
