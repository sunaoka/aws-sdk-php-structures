<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateApiKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $restApiId
 * @property string $stageName
 */
class StageKey extends Shape
{
    /**
     * @param array{
     *     restApiId?: string,
     *     stageName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
