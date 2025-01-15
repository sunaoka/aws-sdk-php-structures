<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateSignalCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property string|null $description
 * @property string|null $deprecationMessage
 * @property string|null $comment
 */
class Branch extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     description?: string|null,
     *     deprecationMessage?: string|null,
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
