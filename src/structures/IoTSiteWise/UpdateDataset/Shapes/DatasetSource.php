<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KENDRA' $sourceType
 * @property 'KNOWLEDGE_BASE' $sourceFormat
 * @property SourceDetail|null $sourceDetail
 */
class DatasetSource extends Shape
{
    /**
     * @param array{
     *     sourceType: 'KENDRA',
     *     sourceFormat: 'KNOWLEDGE_BASE',
     *     sourceDetail?: SourceDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
