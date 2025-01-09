<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 */
class ResourcePathComponent extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
