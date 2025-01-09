<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateSignalCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property string $description
 * @property string $deprecationMessage
 * @property string $comment
 */
class CustomStruct extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     description?: string,
     *     deprecationMessage?: string,
     *     comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
