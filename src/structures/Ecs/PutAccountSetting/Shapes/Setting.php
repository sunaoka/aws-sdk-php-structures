<?php

namespace Sunaoka\Aws\Structures\Ecs\PutAccountSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|null $name
 * @property string|null $value
 * @property string|null $principalArn
 */
class Setting extends Shape
{
    /**
     * @param array{
     *     name?: 'serviceLongArnFormat'|'taskLongArnFormat'|'containerInstanceLongArnFormat'|'awsvpcTrunking'|'containerInsights'|'fargateFIPSMode'|'tagResourceAuthorization'|null,
     *     value?: string|null,
     *     principalArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
