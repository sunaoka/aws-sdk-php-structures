<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\DeleteThingShadow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string|null $shadowName
 */
class DeleteThingShadowRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     shadowName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
