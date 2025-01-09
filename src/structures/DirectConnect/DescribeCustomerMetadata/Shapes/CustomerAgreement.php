<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeCustomerMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agreementName
 * @property string $status
 */
class CustomerAgreement extends Shape
{
    /**
     * @param array{
     *     agreementName?: string,
     *     status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
