<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityName
 * @property array<string, string>|null $customProperties
 * @property DataTransferApi|null $dataTransferApi
 */
class CustomConnectorSourceProperties extends Shape
{
    /**
     * @param array{
     *     entityName: string,
     *     customProperties?: array<string, string>|null,
     *     dataTransferApi?: DataTransferApi|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
