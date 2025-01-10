<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\UpdateThingShadow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $shadowName
 * @property string|resource|\Psr\Http\Message\StreamInterface $payload
 */
class UpdateThingShadowRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     shadowName?: string,
     *     payload: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
