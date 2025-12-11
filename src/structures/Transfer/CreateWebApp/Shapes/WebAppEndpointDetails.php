<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebAppVpcConfig|null $Vpc
 */
class WebAppEndpointDetails extends Shape
{
    /**
     * @param array{Vpc?: WebAppVpcConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
