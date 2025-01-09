<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'UpdateReplacePolicy'|'Tags' $Attribute
 * @property string $Name
 * @property 'Never'|'Conditionally'|'Always' $RequiresRecreation
 * @property string $Path
 * @property string $BeforeValue
 * @property string $AfterValue
 * @property 'Add'|'Remove'|'Modify' $AttributeChangeType
 */
class ResourceTargetDefinition extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'UpdateReplacePolicy'|'Tags',
     *     Name?: string,
     *     RequiresRecreation?: 'Never'|'Conditionally'|'Always',
     *     Path?: string,
     *     BeforeValue?: string,
     *     AfterValue?: string,
     *     AttributeChangeType?: 'Add'|'Remove'|'Modify'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
