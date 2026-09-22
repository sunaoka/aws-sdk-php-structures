<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAccessGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $grantId
 * @property string $grantArn
 * @property string|null $name
 * @property string $domainId
 * @property AccessGrantPrincipal $principal
 * @property 'SPACE_ADMIN'|'READ'|'READ_WRITE_DELETE'|'CUSTOM' $permission
 * @property 'SERVICE_MANAGED'|'CUSTOMER_MANAGED' $grantType
 * @property string $spaceId
 */
class AccessGrantSummary extends Shape
{
    /**
     * @param array{
     *     grantId: string,
     *     grantArn: string,
     *     name?: string|null,
     *     domainId: string,
     *     principal: AccessGrantPrincipal,
     *     permission: 'SPACE_ADMIN'|'READ'|'READ_WRITE_DELETE'|'CUSTOM',
     *     grantType: 'SERVICE_MANAGED'|'CUSTOMER_MANAGED',
     *     spaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
