<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $StackName
 * @property string|null $Description
 * @property 'ALL'|'ASSOCIATED'|null $AppVisibility
 * @property list<Shapes\EntitlementAttribute>|null $Attributes
 */
class UpdateEntitlementRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     StackName: string,
     *     Description?: string|null,
     *     AppVisibility?: 'ALL'|'ASSOCIATED'|null,
     *     Attributes?: list<Shapes\EntitlementAttribute>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
