<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN' $IdentityType
 * @property string $IdentityName
 * @property bool $SendingEnabled
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED' $VerificationStatus
 */
class IdentityInfo extends Shape
{
    /**
     * @param array{
     *     IdentityType?: 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN',
     *     IdentityName?: string,
     *     SendingEnabled?: bool,
     *     VerificationStatus?: 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
