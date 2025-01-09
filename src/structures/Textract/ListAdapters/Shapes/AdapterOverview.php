<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdapterId
 * @property string $AdapterName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 */
class AdapterOverview extends Shape
{
    /**
     * @param array{
     *     AdapterId?: string,
     *     AdapterName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     FeatureTypes?: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
