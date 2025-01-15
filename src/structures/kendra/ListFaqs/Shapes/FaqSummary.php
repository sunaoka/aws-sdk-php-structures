<?php

namespace Sunaoka\Aws\Structures\kendra\ListFaqs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property 'CSV'|'CSV_WITH_HEADER'|'JSON'|null $FileFormat
 * @property string|null $LanguageCode
 */
class FaqSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Status?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     FileFormat?: 'CSV'|'CSV_WITH_HEADER'|'JSON'|null,
     *     LanguageCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
