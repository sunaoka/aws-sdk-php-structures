<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeCustomerMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agreementName
 * @property string|null $status
 */
class CustomerAgreement extends Shape
{
    /**
     * @param array{
     *     agreementName?: string|null,
     *     status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
