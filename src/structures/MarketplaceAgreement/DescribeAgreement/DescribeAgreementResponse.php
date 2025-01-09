<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\DescribeAgreement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $acceptanceTime
 * @property Shapes\Acceptor $acceptor
 * @property string $agreementId
 * @property string $agreementType
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\EstimatedCharges $estimatedCharges
 * @property Shapes\ProposalSummary $proposalSummary
 * @property Shapes\Proposer $proposer
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ACTIVE'|'ARCHIVED'|'CANCELLED'|'EXPIRED'|'RENEWED'|'REPLACED'|'ROLLED_BACK'|'SUPERSEDED'|'TERMINATED' $status
 */
class DescribeAgreementResponse extends Response
{
}
