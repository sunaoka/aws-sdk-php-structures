<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateCustomLogSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomLogSourceAttributes $attributes
 * @property CustomLogSourceProvider $provider
 * @property string $sourceName
 * @property string $sourceVersion
 */
class CustomLogSourceResource extends Shape
{
    /**
     * @param array{
     *     attributes?: CustomLogSourceAttributes,
     *     provider?: CustomLogSourceProvider,
     *     sourceName?: string,
     *     sourceVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
