<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KENDRA'|'SITEWISE' $sourceType
 * @property 'KNOWLEDGE_BASE'|'TIMESERIES' $sourceFormat
 * @property SourceDetail|null $sourceDetail
 */
class DatasetSource extends Shape
{
    /**
     * @param array{
     *     sourceType: 'KENDRA'|'SITEWISE',
     *     sourceFormat: 'KNOWLEDGE_BASE'|'TIMESERIES',
     *     sourceDetail?: SourceDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
