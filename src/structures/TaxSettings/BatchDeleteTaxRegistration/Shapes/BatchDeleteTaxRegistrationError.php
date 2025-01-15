<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchDeleteTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string|null $code
 * @property string $message
 */
class BatchDeleteTaxRegistrationError extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     code?: string|null,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
