<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property DocumentationPartLocation $location
 * @property string $properties
 */
class DocumentationPart extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     location?: DocumentationPartLocation,
     *     properties?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
