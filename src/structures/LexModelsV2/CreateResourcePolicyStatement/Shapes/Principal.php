<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateResourcePolicyStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $service
 * @property string|null $arn
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     service?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
