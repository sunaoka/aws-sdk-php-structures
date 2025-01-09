<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 */
class GetContainerImagesRequest extends Request
{
    /**
     * @param array{serviceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
