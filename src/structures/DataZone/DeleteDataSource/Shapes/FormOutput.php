<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $formName
 * @property string $typeName
 * @property string $typeRevision
 */
class FormOutput extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     formName: string,
     *     typeName?: string,
     *     typeRevision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
