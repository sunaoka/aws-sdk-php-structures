<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEVICE_CERTIFICATE'|'CA_CERTIFICATE'|'IOT_POLICY'|'COGNITO_IDENTITY_POOL'|'CLIENT_ID'|'ACCOUNT_SETTINGS'|'ROLE_ALIAS'|'IAM_ROLE'|'ISSUER_CERTIFICATE'|null $resourceType
 * @property ResourceIdentifier|null $resourceIdentifier
 * @property array<string, string>|null $additionalInfo
 */
class RelatedResource extends Shape
{
    /**
     * @param array{
     *     resourceType?: 'DEVICE_CERTIFICATE'|'CA_CERTIFICATE'|'IOT_POLICY'|'COGNITO_IDENTITY_POOL'|'CLIENT_ID'|'ACCOUNT_SETTINGS'|'ROLE_ALIAS'|'IAM_ROLE'|'ISSUER_CERTIFICATE'|null,
     *     resourceIdentifier?: ResourceIdentifier|null,
     *     additionalInfo?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
