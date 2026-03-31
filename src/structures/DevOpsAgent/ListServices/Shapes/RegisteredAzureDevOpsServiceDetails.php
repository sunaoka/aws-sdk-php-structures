<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $organizationName
 */
class RegisteredAzureDevOpsServiceDetails extends Shape
{
    /**
     * @param array{organizationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
