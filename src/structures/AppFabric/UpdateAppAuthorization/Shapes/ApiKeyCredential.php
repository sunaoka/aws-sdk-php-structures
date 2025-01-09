<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateAppAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKey
 */
class ApiKeyCredential extends Shape
{
    /**
     * @param array{apiKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
