<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Page
 * @property 'INFERENCING_PLAINTEXT_WITH_NATIVE_TRAINED_MODEL'|'INFERENCING_NATIVE_DOCUMENT_WITH_PLAINTEXT_TRAINED_MODEL' $WarnCode
 * @property string $WarnMessage
 */
class WarningsListItem extends Shape
{
    /**
     * @param array{
     *     Page?: int,
     *     WarnCode?: 'INFERENCING_PLAINTEXT_WITH_NATIVE_TRAINED_MODEL'|'INFERENCING_NATIVE_DOCUMENT_WITH_PLAINTEXT_TRAINED_MODEL',
     *     WarnMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
