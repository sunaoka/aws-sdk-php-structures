<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $formName
 * @property string|null $typeIdentifier
 * @property string|null $typeRevision
 * @property string|null $content
 */
class FormInput extends Shape
{
    /**
     * @param array{
     *     formName: string,
     *     typeIdentifier?: string|null,
     *     typeRevision?: string|null,
     *     content?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
