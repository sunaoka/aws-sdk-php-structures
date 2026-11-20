<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'source' $accountType
 * @property SourceAwsOrgUnit $organizationalUnit
 * @property OrgSourceDeploymentState|null $deploymentState
 */
class SourceAwsOrgConfiguration extends Shape
{
    /**
     * @param array{
     *     accountType: 'source',
     *     organizationalUnit: SourceAwsOrgUnit,
     *     deploymentState?: OrgSourceDeploymentState|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
