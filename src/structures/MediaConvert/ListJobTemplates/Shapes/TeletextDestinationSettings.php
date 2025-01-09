<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PageNumber
 * @property list<'PAGE_TYPE_INITIAL'|'PAGE_TYPE_SUBTITLE'|'PAGE_TYPE_ADDL_INFO'|'PAGE_TYPE_PROGRAM_SCHEDULE'|'PAGE_TYPE_HEARING_IMPAIRED_SUBTITLE'> $PageTypes
 */
class TeletextDestinationSettings extends Shape
{
    /**
     * @param array{
     *     PageNumber?: string,
     *     PageTypes?: list<'PAGE_TYPE_INITIAL'|'PAGE_TYPE_SUBTITLE'|'PAGE_TYPE_ADDL_INFO'|'PAGE_TYPE_PROGRAM_SCHEDULE'|'PAGE_TYPE_HEARING_IMPAIRED_SUBTITLE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
