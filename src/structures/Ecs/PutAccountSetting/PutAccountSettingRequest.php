<?php

namespace Sunaoka\Aws\Structures\Ecs\PutAccountSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate' $name
 * @property string $value
 * @property string|null $principalArn
 */
class PutAccountSettingRequest extends Request
{
    /**
     * @param array{
     *     name: 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate',
     *     value: string,
     *     principalArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
