<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Delete'|'Retain'|'Snapshot'|'ReplaceAndDelete'|'ReplaceAndRetain'|'ReplaceAndSnapshot' $PolicyAction
 * @property 'Add'|'Modify'|'Remove'|'Import'|'Dynamic' $Action
 * @property string $LogicalResourceId
 * @property string $PhysicalResourceId
 * @property string $ResourceType
 * @property 'True'|'False'|'Conditional' $Replacement
 * @property list<'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'UpdateReplacePolicy'|'Tags'> $Scope
 * @property list<ResourceChangeDetail> $Details
 * @property string $ChangeSetId
 * @property ModuleInfo $ModuleInfo
 * @property string $BeforeContext
 * @property string $AfterContext
 */
class ResourceChange extends Shape
{
    /**
     * @param array{
     *     PolicyAction?: 'Delete'|'Retain'|'Snapshot'|'ReplaceAndDelete'|'ReplaceAndRetain'|'ReplaceAndSnapshot',
     *     Action?: 'Add'|'Modify'|'Remove'|'Import'|'Dynamic',
     *     LogicalResourceId?: string,
     *     PhysicalResourceId?: string,
     *     ResourceType?: string,
     *     Replacement?: 'True'|'False'|'Conditional',
     *     Scope?: list<'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'UpdateReplacePolicy'|'Tags'>,
     *     Details?: list<ResourceChangeDetail>,
     *     ChangeSetId?: string,
     *     ModuleInfo?: ModuleInfo,
     *     BeforeContext?: string,
     *     AfterContext?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
