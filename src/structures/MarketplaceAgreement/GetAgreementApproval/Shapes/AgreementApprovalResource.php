<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $type
 * @property string $name
 * @property string|null $deployedOnAws
 */
class AgreementApprovalResource extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: string,
     *     name: string,
     *     deployedOnAws?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
