<?php

namespace Sunaoka\Aws\Structures\Billing\CancelContractualInvestmentAttestation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attestationId
 * @property string $contractArn
 * @property string $reason
 */
class CancelContractualInvestmentAttestationRequest extends Request
{
    /**
     * @param array{
     *     attestationId: string,
     *     contractArn: string,
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
