<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListDomainAccessGrantsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $grantId
 * @property string $grantArn
 * @property string|null $name
 * @property string $domainId
 * @property OrganizationAccessGrantPrincipal $principal
 * @property 'ADMIN' $permission
 * @property 'SERVICE_MANAGED'|'CUSTOMER_MANAGED' $grantType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class OrganizationAccessGrantSummary extends Shape
{
    /**
     * @param array{
     *     grantId: string,
     *     grantArn: string,
     *     name?: string|null,
     *     domainId: string,
     *     principal: OrganizationAccessGrantPrincipal,
     *     permission: 'ADMIN',
     *     grantType: 'SERVICE_MANAGED'|'CUSTOMER_MANAGED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
