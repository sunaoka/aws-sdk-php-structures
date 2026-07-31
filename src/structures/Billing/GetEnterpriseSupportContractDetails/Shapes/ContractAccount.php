<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportContractDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property bool $isGdn
 */
class ContractAccount extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     isGdn: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
