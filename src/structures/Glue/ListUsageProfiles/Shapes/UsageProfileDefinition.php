<?php

namespace Sunaoka\Aws\Structures\Glue\ListUsageProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 */
class UsageProfileDefinition extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     CreatedOn?: \Aws\Api\DateTimeResult,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
