<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoicePDF\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentUrl
 * @property \Aws\Api\DateTimeResult|null $DocumentUrlExpirationDate
 */
class SupplementalDocument extends Shape
{
    /**
     * @param array{
     *     DocumentUrl?: string|null,
     *     DocumentUrlExpirationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
