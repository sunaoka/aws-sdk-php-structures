<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $formName
 * @property string|null $typeName
 * @property string|null $typeRevision
 * @property string|null $content
 */
class FormOutput extends Shape
{
    /**
     * @param array{
     *     formName: string,
     *     typeName?: string|null,
     *     typeRevision?: string|null,
     *     content?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
