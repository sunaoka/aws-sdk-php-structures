<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\GetThingShadow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $shadowName
 */
class GetThingShadowRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     shadowName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
