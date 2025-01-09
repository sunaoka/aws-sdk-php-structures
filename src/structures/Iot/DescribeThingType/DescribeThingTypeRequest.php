<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingTypeName
 */
class DescribeThingTypeRequest extends Request
{
    /**
     * @param array{thingTypeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
