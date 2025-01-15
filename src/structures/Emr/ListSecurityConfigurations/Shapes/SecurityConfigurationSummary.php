<?php

namespace Sunaoka\Aws\Structures\Emr\ListSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 */
class SecurityConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CreationDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
