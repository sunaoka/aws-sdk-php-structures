<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CRAWL_ID'|'STATE'|'START_TIME'|'END_TIME'|'DPU_HOUR'|null $FieldName
 * @property 'GT'|'GE'|'LT'|'LE'|'EQ'|'NE'|null $FilterOperator
 * @property string|null $FieldValue
 */
class CrawlsFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'CRAWL_ID'|'STATE'|'START_TIME'|'END_TIME'|'DPU_HOUR'|null,
     *     FilterOperator?: 'GT'|'GE'|'LT'|'LE'|'EQ'|'NE'|null,
     *     FieldValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
