<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Accounts
 * @property string $AccountsUrl
 * @property list<string> $OrganizationalUnitIds
 * @property 'NONE'|'INTERSECTION'|'DIFFERENCE'|'UNION' $AccountFilterType
 */
class DeploymentTargets extends Shape
{
    /**
     * @param array{
     *     Accounts?: list<string>,
     *     AccountsUrl?: string,
     *     OrganizationalUnitIds?: list<string>,
     *     AccountFilterType?: 'NONE'|'INTERSECTION'|'DIFFERENCE'|'UNION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
