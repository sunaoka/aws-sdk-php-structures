<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'NEW'|'AMEND'|'REPLACE' $intent
 * @property list<Shapes\RequestedTerm> $requestedTerms
 * @property string|null $sourceAgreementIdentifier
 * @property string|null $agreementProposalIdentifier
 * @property Shapes\TaxConfiguration|null $taxConfiguration
 */
class CreateAgreementRequestRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     intent: 'NEW'|'AMEND'|'REPLACE',
     *     requestedTerms: list<Shapes\RequestedTerm>,
     *     sourceAgreementIdentifier?: string|null,
     *     agreementProposalIdentifier?: string|null,
     *     taxConfiguration?: Shapes\TaxConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
