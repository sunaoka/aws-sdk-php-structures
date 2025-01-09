<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property string $ParameterSpec
 * @property string $BlueprintLocation
 * @property string $BlueprintServiceLocation
 */
class LastActiveDefinition extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult,
     *     ParameterSpec?: string,
     *     BlueprintLocation?: string,
     *     BlueprintServiceLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
