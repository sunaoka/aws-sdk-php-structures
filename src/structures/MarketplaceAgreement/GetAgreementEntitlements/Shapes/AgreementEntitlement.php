<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceShape|null $resource
 * @property string|null $type
 * @property string|null $registrationToken
 * @property 'PROVISIONED'|'SCHEDULED'|'PENDING'|'FAILED'|'DEPROVISIONED'|null $status
 * @property 'PROVISIONING_IN_PROGRESS'|'FUTURE_START_DATE'|'INVALID_PAYMENT_INSTRUMENT'|'INCOMPATIBLE_CURRENCY'|'ACCOUNT_SUSPENDED'|'UNSUPPORTED_OPERATION'|'AGREEMENT_INACTIVE'|'AGREEMENT_ACTIVE'|'PRODUCT_RESTRICTED'|null $statusReasonCode
 * @property string|null $licenseArn
 */
class AgreementEntitlement extends Shape
{
    /**
     * @param array{
     *     resource?: ResourceShape|null,
     *     type?: string|null,
     *     registrationToken?: string|null,
     *     status?: 'PROVISIONED'|'SCHEDULED'|'PENDING'|'FAILED'|'DEPROVISIONED'|null,
     *     statusReasonCode?: 'PROVISIONING_IN_PROGRESS'|'FUTURE_START_DATE'|'INVALID_PAYMENT_INSTRUMENT'|'INCOMPATIBLE_CURRENCY'|'ACCOUNT_SUSPENDED'|'UNSUPPORTED_OPERATION'|'AGREEMENT_INACTIVE'|'AGREEMENT_ACTIVE'|'PRODUCT_RESTRICTED'|null,
     *     licenseArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
