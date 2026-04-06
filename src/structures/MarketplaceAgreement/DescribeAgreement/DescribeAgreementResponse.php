<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $agreementId
 * @property Shapes\Acceptor|null $acceptor
 * @property Shapes\Proposer|null $proposer
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property \Aws\Api\DateTimeResult|null $acceptanceTime
 * @property string|null $agreementType
 * @property Shapes\EstimatedCharges|null $estimatedCharges
 * @property Shapes\ProposalSummary|null $proposalSummary
 * @property 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED'|null $status
 */
class DescribeAgreementResponse extends Response
{
}
