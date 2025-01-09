<?php

namespace Sunaoka\Aws\Structures\Lightsail\DisableAddOn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AutoSnapshot'|'StopInstanceOnIdle' $addOnType
 * @property string $resourceName
 */
class DisableAddOnRequest extends Request
{
    /**
     * @param array{
     *     addOnType: 'AutoSnapshot'|'StopInstanceOnIdle',
     *     resourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
