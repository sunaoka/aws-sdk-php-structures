<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 */
class DescribeThingRequest extends Request
{
    /**
     * @param array{thingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
