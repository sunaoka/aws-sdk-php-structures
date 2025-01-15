<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PageNumber
 * @property list<'PAGE_TYPE_INITIAL'|'PAGE_TYPE_SUBTITLE'|'PAGE_TYPE_ADDL_INFO'|'PAGE_TYPE_PROGRAM_SCHEDULE'|'PAGE_TYPE_HEARING_IMPAIRED_SUBTITLE'>|null $PageTypes
 */
class TeletextDestinationSettings extends Shape
{
    /**
     * @param array{
     *     PageNumber?: string|null,
     *     PageTypes?: list<'PAGE_TYPE_INITIAL'|'PAGE_TYPE_SUBTITLE'|'PAGE_TYPE_ADDL_INFO'|'PAGE_TYPE_PROGRAM_SCHEDULE'|'PAGE_TYPE_HEARING_IMPAIRED_SUBTITLE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
