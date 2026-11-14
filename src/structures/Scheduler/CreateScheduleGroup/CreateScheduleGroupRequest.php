<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateScheduleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateScheduleGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
