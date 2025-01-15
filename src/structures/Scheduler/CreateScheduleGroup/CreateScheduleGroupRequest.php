<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateScheduleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateScheduleGroupRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
