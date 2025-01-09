<?php

namespace Sunaoka\Aws\Structures\Ecs\ListAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate' $name
 * @property string $value
 * @property string $principalArn
 * @property bool $effectiveSettings
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     name?: 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|'fargateTaskRetirementWaitPeriod'|'guardDutyActivate',
     *     value?: string,
     *     principalArn?: string,
     *     effectiveSettings?: bool,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
