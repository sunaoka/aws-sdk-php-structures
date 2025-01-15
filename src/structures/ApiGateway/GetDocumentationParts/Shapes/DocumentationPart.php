<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property DocumentationPartLocation|null $location
 * @property string|null $properties
 */
class DocumentationPart extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     location?: DocumentationPartLocation|null,
     *     properties?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
