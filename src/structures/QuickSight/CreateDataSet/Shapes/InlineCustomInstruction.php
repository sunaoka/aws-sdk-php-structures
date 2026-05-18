<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstructionText
 * @property UploadedDocumentMetadata|null $UploadedDocumentMetadata
 */
class InlineCustomInstruction extends Shape
{
    /**
     * @param array{
     *     InstructionText: string,
     *     UploadedDocumentMetadata?: UploadedDocumentMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
