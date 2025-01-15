<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdapterId
 * @property string|null $AdapterName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>|null $FeatureTypes
 */
class AdapterOverview extends Shape
{
    /**
     * @param array{
     *     AdapterId?: string|null,
     *     AdapterName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FeatureTypes?: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
