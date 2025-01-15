<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $acceptanceTime
 * @property Shapes\Acceptor|null $acceptor
 * @property string|null $agreementId
 * @property string|null $agreementType
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\EstimatedCharges|null $estimatedCharges
 * @property Shapes\ProposalSummary|null $proposalSummary
 * @property Shapes\Proposer|null $proposer
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED'|null $status
 */
class DescribeAgreementResponse extends Response
{
}
