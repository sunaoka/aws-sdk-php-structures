<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomLogSourceAttributes|null $attributes
 * @property CustomLogSourceProvider|null $provider
 * @property string|null $sourceName
 * @property string|null $sourceVersion
 */
class CustomLogSourceResource extends Shape
{
    /**
     * @param array{
     *     attributes?: CustomLogSourceAttributes|null,
     *     provider?: CustomLogSourceProvider|null,
     *     sourceName?: string|null,
     *     sourceVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
