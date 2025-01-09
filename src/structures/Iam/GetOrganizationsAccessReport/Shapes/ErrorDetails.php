<?php

namespace Sunaoka\Aws\Structures\Iam\GetOrganizationsAccessReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property string $Code
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     Message: string,
     *     Code: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
