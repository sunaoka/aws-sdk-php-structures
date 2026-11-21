<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property None|null $none
 * @property ACMManaged|null $acmManaged
 */
class EndpointConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     none?: None|null,
     *     acmManaged?: ACMManaged|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
