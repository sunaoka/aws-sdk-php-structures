<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CRAWL_ID'|'STATE'|'START_TIME'|'END_TIME'|'DPU_HOUR' $FieldName
 * @property 'GT'|'GE'|'LT'|'LE'|'EQ'|'NE' $FilterOperator
 * @property string $FieldValue
 */
class CrawlsFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'CRAWL_ID'|'STATE'|'START_TIME'|'END_TIME'|'DPU_HOUR',
     *     FilterOperator?: 'GT'|'GE'|'LT'|'LE'|'EQ'|'NE',
     *     FieldValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
