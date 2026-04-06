<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Add'|'Modify'|'Remove'|'Import'|'Dynamic'|null $Action
 * @property string|null $LogicalResourceId
 * @property string|null $PhysicalResourceId
 * @property string|null $ResourceType
 * @property 'True'|'False'|'Conditional'|null $Replacement
 * @property list<'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'Tags'>|null $Scope
 * @property list<ResourceChangeDetail>|null $Details
 * @property string|null $ChangeSetId
 * @property ModuleInfo|null $ModuleInfo
 */
class ResourceChange extends Shape
{
    /**
     * @param array{
     *     Action?: 'Add'|'Modify'|'Remove'|'Import'|'Dynamic'|null,
     *     LogicalResourceId?: string|null,
     *     PhysicalResourceId?: string|null,
     *     ResourceType?: string|null,
     *     Replacement?: 'True'|'False'|'Conditional'|null,
     *     Scope?: list<'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'Tags'>|null,
     *     Details?: list<ResourceChangeDetail>|null,
     *     ChangeSetId?: string|null,
     *     ModuleInfo?: ModuleInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
