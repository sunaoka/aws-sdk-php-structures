<?php

namespace Sunaoka\Aws\Structures\Lightsail\RegisterContainerImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property string $label
 * @property string $digest
 */
class RegisterContainerImageRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     label: string,
     *     digest: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
