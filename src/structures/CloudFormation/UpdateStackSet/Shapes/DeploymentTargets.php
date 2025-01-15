<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Accounts
 * @property string|null $AccountsUrl
 * @property list<string>|null $OrganizationalUnitIds
 * @property 'NONE'|'INTERSECTION'|'DIFFERENCE'|'UNION'|null $AccountFilterType
 */
class DeploymentTargets extends Shape
{
    /**
     * @param array{
     *     Accounts?: list<string>|null,
     *     AccountsUrl?: string|null,
     *     OrganizationalUnitIds?: list<string>|null,
     *     AccountFilterType?: 'NONE'|'INTERSECTION'|'DIFFERENCE'|'UNION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
