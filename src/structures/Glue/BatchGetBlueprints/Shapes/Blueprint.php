<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property string|null $ParameterSpec
 * @property string|null $BlueprintLocation
 * @property string|null $BlueprintServiceLocation
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|null $Status
 * @property string|null $ErrorMessage
 * @property LastActiveDefinition|null $LastActiveDefinition
 */
class Blueprint extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     CreatedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     ParameterSpec?: string|null,
     *     BlueprintLocation?: string|null,
     *     BlueprintServiceLocation?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'FAILED'|null,
     *     ErrorMessage?: string|null,
     *     LastActiveDefinition?: LastActiveDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
