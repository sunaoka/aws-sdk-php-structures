<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 */
class GetAgreementContactsRequest extends Request
{
    /**
     * @param array{agreementId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
