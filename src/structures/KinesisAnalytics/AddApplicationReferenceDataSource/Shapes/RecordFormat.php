<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationReferenceDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'CSV' $RecordFormatType
 * @property MappingParameters $MappingParameters
 */
class RecordFormat extends Shape
{
    /**
     * @param array{
     *     RecordFormatType: 'JSON'|'CSV',
     *     MappingParameters?: MappingParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
