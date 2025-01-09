<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateResourcePolicyStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $service
 * @property string $arn
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     service?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
