<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADD'|'MODIFY'|'REMOVE'|null $Action
 * @property string|null $LogicalResourceId
 * @property string|null $PhysicalResourceId
 * @property string|null $ResourceType
 * @property 'TRUE'|'FALSE'|'CONDITIONAL'|null $Replacement
 * @property list<'PROPERTIES'|'METADATA'|'CREATIONPOLICY'|'UPDATEPOLICY'|'DELETIONPOLICY'|'TAGS'>|null $Scope
 * @property list<ResourceChangeDetail>|null $Details
 */
class ResourceChange extends Shape
{
    /**
     * @param array{
     *     Action?: 'ADD'|'MODIFY'|'REMOVE'|null,
     *     LogicalResourceId?: string|null,
     *     PhysicalResourceId?: string|null,
     *     ResourceType?: string|null,
     *     Replacement?: 'TRUE'|'FALSE'|'CONDITIONAL'|null,
     *     Scope?: list<'PROPERTIES'|'METADATA'|'CREATIONPOLICY'|'UPDATEPOLICY'|'DELETIONPOLICY'|'TAGS'>|null,
     *     Details?: list<ResourceChangeDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
