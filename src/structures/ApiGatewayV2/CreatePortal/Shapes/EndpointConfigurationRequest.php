<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ACMManaged|null $AcmManaged
 * @property None|null $None
 */
class EndpointConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     AcmManaged?: ACMManaged|null,
     *     None?: None|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
