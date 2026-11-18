<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $offerId
 * @property string|null $offerSetId
 * @property list<AgreementApprovalResource>|null $resources
 * @property 'PUBLIC'|'PRIVATE' $visibilityScope
 */
class AgreementApprovalProposalSummary extends Shape
{
    /**
     * @param array{
     *     offerId: string,
     *     offerSetId?: string|null,
     *     resources?: list<AgreementApprovalResource>|null,
     *     visibilityScope: 'PUBLIC'|'PRIVATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
