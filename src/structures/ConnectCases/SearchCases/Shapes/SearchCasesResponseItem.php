<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 * @property string $templateId
 * @property list<FieldValue> $fields
 * @property array<string, string>|null $tags
 */
class SearchCasesResponseItem extends Shape
{
    /**
     * @param array{
     *     caseId: string,
     *     templateId: string,
     *     fields: list<FieldValue>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
