<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TranslatedDocumentsCount
 * @property int $DocumentsWithErrorsCount
 * @property int $InputDocumentsCount
 */
class JobDetails extends Shape
{
    /**
     * @param array{
     *     TranslatedDocumentsCount?: int,
     *     DocumentsWithErrorsCount?: int,
     *     InputDocumentsCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
