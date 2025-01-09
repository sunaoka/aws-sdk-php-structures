<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateEntitlement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $StackName
 * @property string $Description
 * @property 'ALL'|'ASSOCIATED' $AppVisibility
 * @property list<Shapes\EntitlementAttribute> $Attributes
 */
class UpdateEntitlementRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     StackName: string,
     *     Description?: string,
     *     AppVisibility?: 'ALL'|'ASSOCIATED',
     *     Attributes?: list<Shapes\EntitlementAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
