<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateApiKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $restApiId
 * @property string|null $stageName
 */
class StageKey extends Shape
{
    /**
     * @param array{
     *     restApiId?: string|null,
     *     stageName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
