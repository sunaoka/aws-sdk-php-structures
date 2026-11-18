<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $legalName
 */
class AgreementApprovalProposer extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     legalName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
