<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 */
class DescribeAgreementRequest extends Request
{
    /**
     * @param array{agreementId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
