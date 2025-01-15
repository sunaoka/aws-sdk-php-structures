<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property string|null $ParameterSpec
 * @property string|null $BlueprintLocation
 * @property string|null $BlueprintServiceLocation
 */
class LastActiveDefinition extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     ParameterSpec?: string|null,
     *     BlueprintLocation?: string|null,
     *     BlueprintServiceLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
