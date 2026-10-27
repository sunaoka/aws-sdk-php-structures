<?php

namespace Sunaoka\Aws\Structures\Billing\CreateContractualInvestmentAttestation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contractArn
 * @property string $investmentSummaryId
 * @property string $investmentId
 * @property string $contractDocumentId
 * @property Shapes\ApproverDetails $approverDetails
 * @property \Aws\Api\DateTimeResult|null $investmentDisbursedAt
 * @property Shapes\AttestationDetails $attestationDetails
 * @property list<Shapes\AdditionalRecipient>|null $additionalRecipients
 * @property string|null $clientToken
 */
class CreateContractualInvestmentAttestationRequest extends Request
{
    /**
     * @param array{
     *     contractArn: string,
     *     investmentSummaryId: string,
     *     investmentId: string,
     *     contractDocumentId: string,
     *     approverDetails: Shapes\ApproverDetails,
     *     investmentDisbursedAt?: \Aws\Api\DateTimeResult|null,
     *     attestationDetails: Shapes\AttestationDetails,
     *     additionalRecipients?: list<Shapes\AdditionalRecipient>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
