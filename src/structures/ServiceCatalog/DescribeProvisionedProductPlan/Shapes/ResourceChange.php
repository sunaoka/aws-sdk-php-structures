<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADD'|'MODIFY'|'REMOVE' $Action
 * @property string $LogicalResourceId
 * @property string $PhysicalResourceId
 * @property string $ResourceType
 * @property 'TRUE'|'FALSE'|'CONDITIONAL' $Replacement
 * @property list<'PROPERTIES'|'METADATA'|'CREATIONPOLICY'|'UPDATEPOLICY'|'DELETIONPOLICY'|'TAGS'> $Scope
 * @property list<ResourceChangeDetail> $Details
 */
class ResourceChange extends Shape
{
    /**
     * @param array{
     *     Action?: 'ADD'|'MODIFY'|'REMOVE',
     *     LogicalResourceId?: string,
     *     PhysicalResourceId?: string,
     *     ResourceType?: string,
     *     Replacement?: 'TRUE'|'FALSE'|'CONDITIONAL',
     *     Scope?: list<'PROPERTIES'|'METADATA'|'CREATIONPOLICY'|'UPDATEPOLICY'|'DELETIONPOLICY'|'TAGS'>,
     *     Details?: list<ResourceChangeDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
