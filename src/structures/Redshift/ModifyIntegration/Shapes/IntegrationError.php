<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string|null $ErrorMessage
 */
class IntegrationError extends Shape
{
    /**
     * @param array{
     *     ErrorCode: string,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
