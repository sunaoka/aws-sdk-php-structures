<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentDataFieldName
 * @property string $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 * @property list<'ACTIVE_USER'|'STANDARD_USER'> $IncludeFilterTypes
 */
class SalesforceChatterFeedConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentDataFieldName: string,
     *     DocumentTitleFieldName?: string,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     IncludeFilterTypes?: list<'ACTIVE_USER'|'STANDARD_USER'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
