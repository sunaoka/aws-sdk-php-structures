<?php

namespace Sunaoka\Aws\Structures\Billing\GetContractInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contractArn
 * @property Interval $contractTerm
 * @property list<string> $eligiblePayerAccounts
 * @property list<string> $investmentAccounts
 * @property list<LegalEntity> $legalEntities
 * @property list<'ATTESTATION_SELF_SERVICE_BLOCKED'>|null $contractRestrictions
 */
class PrivatePricingAddendum extends Shape
{
    /**
     * @param array{
     *     contractArn: string,
     *     contractTerm: Interval,
     *     eligiblePayerAccounts: list<string>,
     *     investmentAccounts: list<string>,
     *     legalEntities: list<LegalEntity>,
     *     contractRestrictions?: list<'ATTESTATION_SELF_SERVICE_BLOCKED'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
