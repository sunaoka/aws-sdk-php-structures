<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $organizationId
 */
class AwsOrganizationAdminApprover extends Shape
{
    /**
     * @param array{organizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
