<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agreementId
 * @property \Aws\Api\DateTimeResult|null $acceptanceTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property string|null $agreementType
 * @property Acceptor|null $acceptor
 * @property Proposer|null $proposer
 * @property ProposalSummary|null $proposalSummary
 * @property 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED'|null $status
 * @property list<Entitlement>|null $entitlements
 * @property string|null $initialAgreementId
 * @property 'RENEW'|'REPLACE'|'EXPIRE'|null $endTimeBehaviorType
 * @property 'PROPOSER_RENEW_OPTED_OUT'|'ACCEPTOR_RENEW_OPTED_OUT'|'NO_RENEWAL_TERM'|'RENEWAL_LIMIT_EXHAUSTED'|null $endTimeBehaviorReasonCode
 */
class AgreementViewSummary extends Shape
{
    /**
     * @param array{
     *     agreementId?: string|null,
     *     acceptanceTime?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     agreementType?: string|null,
     *     acceptor?: Acceptor|null,
     *     proposer?: Proposer|null,
     *     proposalSummary?: ProposalSummary|null,
     *     status?: 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED'|null,
     *     entitlements?: list<Entitlement>|null,
     *     initialAgreementId?: string|null,
     *     endTimeBehaviorType?: 'RENEW'|'REPLACE'|'EXPIRE'|null,
     *     endTimeBehaviorReasonCode?: 'PROPOSER_RENEW_OPTED_OUT'|'ACCEPTOR_RENEW_OPTED_OUT'|'NO_RENEWAL_TERM'|'RENEWAL_LIMIT_EXHAUSTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
