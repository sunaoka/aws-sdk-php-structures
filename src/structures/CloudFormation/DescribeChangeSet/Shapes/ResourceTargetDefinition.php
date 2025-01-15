<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'UpdateReplacePolicy'|'Tags'|null $Attribute
 * @property string|null $Name
 * @property 'Never'|'Conditionally'|'Always'|null $RequiresRecreation
 * @property string|null $Path
 * @property string|null $BeforeValue
 * @property string|null $AfterValue
 * @property 'Add'|'Remove'|'Modify'|null $AttributeChangeType
 */
class ResourceTargetDefinition extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'Properties'|'Metadata'|'CreationPolicy'|'UpdatePolicy'|'DeletionPolicy'|'UpdateReplacePolicy'|'Tags'|null,
     *     Name?: string|null,
     *     RequiresRecreation?: 'Never'|'Conditionally'|'Always'|null,
     *     Path?: string|null,
     *     BeforeValue?: string|null,
     *     AfterValue?: string|null,
     *     AttributeChangeType?: 'Add'|'Remove'|'Modify'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
