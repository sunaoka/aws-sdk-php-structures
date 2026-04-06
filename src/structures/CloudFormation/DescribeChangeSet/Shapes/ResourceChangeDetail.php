<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceTargetDefinition|null $Target
 * @property 'Static'|'Dynamic'|null $Evaluation
 * @property 'ResourceReference'|'ParameterReference'|'ResourceAttribute'|'DirectModification'|'Automatic'|null $ChangeSource
 * @property string|null $CausingEntity
 */
class ResourceChangeDetail extends Shape
{
    /**
     * @param array{
     *     Target?: ResourceTargetDefinition|null,
     *     Evaluation?: 'Static'|'Dynamic'|null,
     *     ChangeSource?: 'ResourceReference'|'ParameterReference'|'ResourceAttribute'|'DirectModification'|'Automatic'|null,
     *     CausingEntity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
