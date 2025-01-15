<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Page
 * @property 'INFERENCING_PLAINTEXT_WITH_NATIVE_TRAINED_MODEL'|'INFERENCING_NATIVE_DOCUMENT_WITH_PLAINTEXT_TRAINED_MODEL'|null $WarnCode
 * @property string|null $WarnMessage
 */
class WarningsListItem extends Shape
{
    /**
     * @param array{
     *     Page?: int|null,
     *     WarnCode?: 'INFERENCING_PLAINTEXT_WITH_NATIVE_TRAINED_MODEL'|'INFERENCING_NATIVE_DOCUMENT_WITH_PLAINTEXT_TRAINED_MODEL'|null,
     *     WarnMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
