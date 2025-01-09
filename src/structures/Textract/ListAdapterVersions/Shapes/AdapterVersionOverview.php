<?php

namespace Sunaoka\Aws\Structures\Textract\ListAdapterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdapterId
 * @property string $AdapterVersion
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property 'ACTIVE'|'AT_RISK'|'DEPRECATED'|'CREATION_ERROR'|'CREATION_IN_PROGRESS' $Status
 * @property string $StatusMessage
 */
class AdapterVersionOverview extends Shape
{
    /**
     * @param array{
     *     AdapterId?: string,
     *     AdapterVersion?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     FeatureTypes?: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>,
     *     Status?: 'ACTIVE'|'AT_RISK'|'DEPRECATED'|'CREATION_ERROR'|'CREATION_IN_PROGRESS',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
