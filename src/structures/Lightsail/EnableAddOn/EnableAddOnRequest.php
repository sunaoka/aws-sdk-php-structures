<?php

namespace Sunaoka\Aws\Structures\Lightsail\EnableAddOn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property Shapes\AddOnRequest $addOnRequest
 */
class EnableAddOnRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     addOnRequest: Shapes\AddOnRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
