<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NewRelicApiKeyConfig|null $apiKey
 */
class NewRelicServiceAuthorizationConfig extends Shape
{
    /**
     * @param array{apiKey?: NewRelicApiKeyConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
