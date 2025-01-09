<?php

namespace Sunaoka\Aws\Structures\kendra\ListFaqs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'CSV'|'CSV_WITH_HEADER'|'JSON' $FileFormat
 * @property string $LanguageCode
 */
class FaqSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Status?: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     FileFormat?: 'CSV'|'CSV_WITH_HEADER'|'JSON',
     *     LanguageCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
