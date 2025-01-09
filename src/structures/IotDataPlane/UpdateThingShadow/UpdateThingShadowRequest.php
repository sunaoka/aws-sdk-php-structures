<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\UpdateThingShadow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $shadowName
 * @property string $payload
 */
class UpdateThingShadowRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     shadowName?: string,
     *     payload: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
