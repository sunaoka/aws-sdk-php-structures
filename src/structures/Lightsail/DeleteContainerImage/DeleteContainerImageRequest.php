<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteContainerImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property string $image
 */
class DeleteContainerImageRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     image: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
