<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestmentAttestations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attestationId
 * @property string $investmentName
 * @property string $outcomeDescription
 * @property string $investmentSummaryId
 * @property string $investmentId
 * @property \Aws\Api\DateTimeResult $attestedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'PENDING_REVIEW'|'PENDING_C_LEVEL_APPROVAL'|'PENDING_CANCELLATION'|'REJECTED'|'CANCELLED'|'DISBURSED' $attestationStatus
 * @property \Aws\Api\DateTimeResult|null $investmentDisbursedAt
 * @property Amount|null $attestedValue
 * @property list<InvestmentDistribution>|null $investmentDistributions
 * @property list<string>|null $rejectionReasons
 * @property bool|null $isCancellable
 */
class InvestmentAttestation extends Shape
{
    /**
     * @param array{
     *     attestationId: string,
     *     investmentName: string,
     *     outcomeDescription: string,
     *     investmentSummaryId: string,
     *     investmentId: string,
     *     attestedAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     attestationStatus: 'PENDING_REVIEW'|'PENDING_C_LEVEL_APPROVAL'|'PENDING_CANCELLATION'|'REJECTED'|'CANCELLED'|'DISBURSED',
     *     investmentDisbursedAt?: \Aws\Api\DateTimeResult|null,
     *     attestedValue?: Amount|null,
     *     investmentDistributions?: list<InvestmentDistribution>|null,
     *     rejectionReasons?: list<string>|null,
     *     isCancellable?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
