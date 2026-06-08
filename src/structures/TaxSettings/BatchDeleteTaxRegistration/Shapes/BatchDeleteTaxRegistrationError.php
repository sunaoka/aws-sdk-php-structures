<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchDeleteTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $message
 * @property string|null $code
 */
class BatchDeleteTaxRegistrationError extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     message: string,
     *     code?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
