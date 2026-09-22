<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAccessGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $grantId
 * @property string $grantArn
 * @property string|null $name
 * @property string $accountId
 * @property string $domainId
 * @property AccessGrantPrincipal $principal
 * @property 'SPACE_ADMIN'|'READ'|'READ_WRITE_DELETE'|'CUSTOM' $permission
 * @property 'SERVICE_MANAGED'|'CUSTOMER_MANAGED' $grantType
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $spaceId
 * @property list<ScopedActions>|null $scopedActions
 */
class AccessGrant extends Shape
{
    /**
     * @param array{
     *     grantId: string,
     *     grantArn: string,
     *     name?: string|null,
     *     accountId: string,
     *     domainId: string,
     *     principal: AccessGrantPrincipal,
     *     permission: 'SPACE_ADMIN'|'READ'|'READ_WRITE_DELETE'|'CUSTOM',
     *     grantType: 'SERVICE_MANAGED'|'CUSTOMER_MANAGED',
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     spaceId: string,
     *     scopedActions?: list<ScopedActions>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
