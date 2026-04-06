<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Delete'|'Retain'|'Snapshot'|'ReplaceAndDelete'|'ReplaceAndRetain'|'ReplaceAndSnapshot'|null $PolicyAction
 * @property 'Add'|'Modify'|'Remove'|'Import'|'Dynamic'|null $Action
 * @property string|null $LogicalResourceId
 * @property string|null $PhysicalResourceId
 * @property string|null $ResourceType
 * @property 'True'|'False'|'Conditional'|null $Replacement
 * @property list<'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'UpdateReplacePolicy'|'Tags'>|null $Scope
 * @property list<ResourceChangeDetail>|null $Details
 * @property string|null $ChangeSetId
 * @property ModuleInfo|null $ModuleInfo
 * @property string|null $BeforeContext
 * @property string|null $AfterContext
 */
class ResourceChange extends Shape
{
    /**
     * @param array{
     *     PolicyAction?: 'Delete'|'Retain'|'Snapshot'|'ReplaceAndDelete'|'ReplaceAndRetain'|'ReplaceAndSnapshot'|null,
     *     Action?: 'Add'|'Modify'|'Remove'|'Import'|'Dynamic'|null,
     *     LogicalResourceId?: string|null,
     *     PhysicalResourceId?: string|null,
     *     ResourceType?: string|null,
     *     Replacement?: 'True'|'False'|'Conditional'|null,
     *     Scope?: list<'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'UpdateReplacePolicy'|'Tags'>|null,
     *     Details?: list<ResourceChangeDetail>|null,
     *     ChangeSetId?: string|null,
     *     ModuleInfo?: ModuleInfo|null,
     *     BeforeContext?: string|null,
     *     AfterContext?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
