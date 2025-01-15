<?php

namespace Sunaoka\Aws\Structures\Translate\DescribeTextTranslationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TranslatedDocumentsCount
 * @property int|null $DocumentsWithErrorsCount
 * @property int|null $InputDocumentsCount
 */
class JobDetails extends Shape
{
    /**
     * @param array{
     *     TranslatedDocumentsCount?: int|null,
     *     DocumentsWithErrorsCount?: int|null,
     *     InputDocumentsCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
