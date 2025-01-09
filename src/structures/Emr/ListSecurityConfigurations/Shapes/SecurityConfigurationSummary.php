<?php

namespace Sunaoka\Aws\Structures\Emr\ListSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 */
class SecurityConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     CreationDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
