<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 */
class ResourcePathComponent extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
