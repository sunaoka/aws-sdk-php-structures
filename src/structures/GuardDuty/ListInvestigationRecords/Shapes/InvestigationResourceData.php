<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvestigationEc2Instance|null $Ec2Instance
 * @property LambdaFunction|null $LambdaFunction
 * @property RdsDbInstance|null $RdsDbInstance
 * @property RdsDbUser|null $RdsDbUser
 * @property InvestigationEksCluster|null $EksCluster
 * @property InvestigationEcsCluster|null $EcsCluster
 */
class InvestigationResourceData extends Shape
{
    /**
     * @param array{
     *     Ec2Instance?: InvestigationEc2Instance|null,
     *     LambdaFunction?: LambdaFunction|null,
     *     RdsDbInstance?: RdsDbInstance|null,
     *     RdsDbUser?: RdsDbUser|null,
     *     EksCluster?: InvestigationEksCluster|null,
     *     EcsCluster?: InvestigationEcsCluster|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
