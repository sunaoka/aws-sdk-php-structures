<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteAccountSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate' $name
 * @property string $value
 * @property string $principalArn
 * @property 'user'|'aws_managed' $type
 */
class Setting extends Shape
{
    /**
     * @param array{
     *     name?: 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate',
     *     value?: string,
     *     principalArn?: string,
     *     type?: 'user'|'aws_managed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
