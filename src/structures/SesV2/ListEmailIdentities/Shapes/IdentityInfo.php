<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN'|null $IdentityType
 * @property string|null $IdentityName
 * @property bool|null $SendingEnabled
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null $VerificationStatus
 */
class IdentityInfo extends Shape
{
    /**
     * @param array{
     *     IdentityType?: 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN'|null,
     *     IdentityName?: string|null,
     *     SendingEnabled?: bool|null,
     *     VerificationStatus?: 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
