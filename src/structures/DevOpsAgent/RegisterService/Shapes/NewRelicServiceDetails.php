<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NewRelicServiceAuthorizationConfig $authorizationConfig
 */
class NewRelicServiceDetails extends Shape
{
    /**
     * @param array{authorizationConfig: NewRelicServiceAuthorizationConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
