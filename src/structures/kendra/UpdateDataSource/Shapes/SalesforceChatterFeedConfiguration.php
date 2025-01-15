<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentDataFieldName
 * @property string|null $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 * @property list<'ACTIVE_USER'|'STANDARD_USER'>|null $IncludeFilterTypes
 */
class SalesforceChatterFeedConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentDataFieldName: string,
     *     DocumentTitleFieldName?: string|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     IncludeFilterTypes?: list<'ACTIVE_USER'|'STANDARD_USER'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
