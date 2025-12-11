<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchPutAttributesMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property string $formName
 * @property string|null $typeIdentifier
 * @property string|null $typeRevision
 */
class FormInput extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     formName: string,
     *     typeIdentifier?: string|null,
     *     typeRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
