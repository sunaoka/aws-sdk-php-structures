<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT'|'CAMPAIGN'|'CASE'|'CONTACT'|'CONTRACT'|'DOCUMENT'|'GROUP'|'IDEA'|'LEAD'|'OPPORTUNITY'|'PARTNER'|'PRICEBOOK'|'PRODUCT'|'PROFILE'|'SOLUTION'|'TASK'|'USER' $Name
 * @property string $DocumentDataFieldName
 * @property string $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 */
class SalesforceStandardObjectConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: 'ACCOUNT'|'CAMPAIGN'|'CASE'|'CONTACT'|'CONTRACT'|'DOCUMENT'|'GROUP'|'IDEA'|'LEAD'|'OPPORTUNITY'|'PARTNER'|'PRICEBOOK'|'PRODUCT'|'PROFILE'|'SOLUTION'|'TASK'|'USER',
     *     DocumentDataFieldName: string,
     *     DocumentTitleFieldName?: string,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
