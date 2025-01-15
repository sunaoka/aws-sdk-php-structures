<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELECT_FROM_LIST'|'UPLOAD_FILE'|'INPUT_TEXT'|null $keywordInputType
 * @property string|null $keywordValue
 */
class SourceKeyword extends Shape
{
    /**
     * @param array{
     *     keywordInputType?: 'SELECT_FROM_LIST'|'UPLOAD_FILE'|'INPUT_TEXT'|null,
     *     keywordValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
