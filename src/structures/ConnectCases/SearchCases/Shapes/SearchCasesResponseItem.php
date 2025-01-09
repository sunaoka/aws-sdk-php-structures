<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 * @property list<FieldValue> $fields
 * @property array<string, string> $tags
 * @property string $templateId
 */
class SearchCasesResponseItem extends Shape
{
    /**
     * @param array{
     *     caseId: string,
     *     fields: list<FieldValue>,
     *     tags?: array<string, string>,
     *     templateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
