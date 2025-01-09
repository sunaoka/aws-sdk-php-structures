<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceTargetDefinition $Target
 * @property 'Static'|'Dynamic' $Evaluation
 * @property 'ResourceReference'|'ParameterReference'|'ResourceAttribute'|'DirectModification'|'Automatic' $ChangeSource
 * @property string $CausingEntity
 */
class ResourceChangeDetail extends Shape
{
    /**
     * @param array{
     *     Target?: ResourceTargetDefinition,
     *     Evaluation?: 'Static'|'Dynamic',
     *     ChangeSource?: 'ResourceReference'|'ParameterReference'|'ResourceAttribute'|'DirectModification'|'Automatic',
     *     CausingEntity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
