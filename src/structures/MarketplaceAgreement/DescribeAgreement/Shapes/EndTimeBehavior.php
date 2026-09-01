<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RENEW'|'REPLACE'|'EXPIRE' $type
 * @property 'PROPOSER_RENEW_OPTED_OUT'|'ACCEPTOR_RENEW_OPTED_OUT'|'NO_RENEWAL_TERM'|'RENEWAL_LIMIT_EXHAUSTED'|null $reasonCode
 * @property RenewalSummary|null $renewalSummary
 */
class EndTimeBehavior extends Shape
{
    /**
     * @param array{
     *     type: 'RENEW'|'REPLACE'|'EXPIRE',
     *     reasonCode?: 'PROPOSER_RENEW_OPTED_OUT'|'ACCEPTOR_RENEW_OPTED_OUT'|'NO_RENEWAL_TERM'|'RENEWAL_LIMIT_EXHAUSTED'|null,
     *     renewalSummary?: RenewalSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
