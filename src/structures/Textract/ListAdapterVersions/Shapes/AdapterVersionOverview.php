<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdapterId
 * @property string|null $AdapterVersion
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>|null $FeatureTypes
 * @property 'ACTIVE'|'AT_RISK'|'DEPRECATED'|'CREATION_ERROR'|'CREATION_IN_PROGRESS'|null $Status
 * @property string|null $StatusMessage
 */
class AdapterVersionOverview extends Shape
{
    /**
     * @param array{
     *     AdapterId?: string|null,
     *     AdapterVersion?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FeatureTypes?: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>|null,
     *     Status?: 'ACTIVE'|'AT_RISK'|'DEPRECATED'|'CREATION_ERROR'|'CREATION_IN_PROGRESS'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
