<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityName
 * @property array<string, string> $customProperties
 * @property DataTransferApi $dataTransferApi
 */
class CustomConnectorSourceProperties extends Shape
{
    /**
     * @param array{
     *     entityName: string,
     *     customProperties?: array<string, string>,
     *     dataTransferApi?: DataTransferApi
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
