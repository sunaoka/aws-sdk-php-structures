<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property string $ParameterSpec
 * @property string $BlueprintLocation
 * @property string $BlueprintServiceLocation
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED' $Status
 * @property string $ErrorMessage
 * @property LastActiveDefinition $LastActiveDefinition
 */
class Blueprint extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     CreatedOn?: \Aws\Api\DateTimeResult,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult,
     *     ParameterSpec?: string,
     *     BlueprintLocation?: string,
     *     BlueprintServiceLocation?: string,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED',
     *     ErrorMessage?: string,
     *     LastActiveDefinition?: LastActiveDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
