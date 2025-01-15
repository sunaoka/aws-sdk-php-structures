<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT'|'CAMPAIGN'|'CASE'|'CONTACT'|'CONTRACT'|'DOCUMENT'|'GROUP'|'IDEA'|'LEAD'|'OPPORTUNITY'|'PARTNER'|'PRICEBOOK'|'PRODUCT'|'PROFILE'|'SOLUTION'|'TASK'|'USER' $Name
 * @property string $DocumentDataFieldName
 * @property string|null $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 */
class SalesforceStandardObjectConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: 'ACCOUNT'|'CAMPAIGN'|'CASE'|'CONTACT'|'CONTRACT'|'DOCUMENT'|'GROUP'|'IDEA'|'LEAD'|'OPPORTUNITY'|'PARTNER'|'PRICEBOOK'|'PRODUCT'|'PROFILE'|'SOLUTION'|'TASK'|'USER',
     *     DocumentDataFieldName: string,
     *     DocumentTitleFieldName?: string|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
