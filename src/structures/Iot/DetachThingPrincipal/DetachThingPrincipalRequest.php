<?php

namespace Sunaoka\Aws\Structures\Iot\DetachThingPrincipal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $principal
 */
class DetachThingPrincipalRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     principal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
