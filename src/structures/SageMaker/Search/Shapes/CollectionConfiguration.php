<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CollectionName
 * @property array<string, string>|null $CollectionParameters
 */
class CollectionConfiguration extends Shape
{
    /**
     * @param array{
     *     CollectionName?: string|null,
     *     CollectionParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
