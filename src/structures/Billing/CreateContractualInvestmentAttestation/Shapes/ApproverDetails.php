<?php

namespace Sunaoka\Aws\Structures\Billing\CreateContractualInvestmentAttestation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $title
 * @property string $email
 */
class ApproverDetails extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     title: string,
     *     email: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
