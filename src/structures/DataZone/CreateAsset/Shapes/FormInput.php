<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $formName
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class FormInput extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     formName: string,
     *     typeIdentifier?: string,
     *     typeRevision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
