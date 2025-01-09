<?php

namespace Sunaoka\Aws\Structures\Rds\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class IntegrationError extends Shape
{
    /**
     * @param array{
     *     ErrorCode: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
