<?php

namespace Sunaoka\Aws\Structures\Ecs\ListAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate'|'defaultLogDriverMode'|'fargateEventWindows'|null $name
 * @property string|null $value
 * @property string|null $principalArn
 * @property bool|null $effectiveSettings
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     name?: 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate'|'defaultLogDriverMode'|'fargateEventWindows'|null,
     *     value?: string|null,
     *     principalArn?: string|null,
     *     effectiveSettings?: bool|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
