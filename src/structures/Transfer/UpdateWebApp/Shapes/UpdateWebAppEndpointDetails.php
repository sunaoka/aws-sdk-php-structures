<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateWebAppVpcConfig|null $Vpc
 */
class UpdateWebAppEndpointDetails extends Shape
{
    /**
     * @param array{Vpc?: UpdateWebAppVpcConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
