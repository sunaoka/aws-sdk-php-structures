<?php

namespace Sunaoka\Aws\Structures\Swf\UndeprecateActivityType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\ActivityType $activityType
 */
class UndeprecateActivityTypeRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     activityType: Shapes\ActivityType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
