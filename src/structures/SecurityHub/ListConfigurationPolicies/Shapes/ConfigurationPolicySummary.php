<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property bool $ServiceEnabled
 */
class ConfigurationPolicySummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     ServiceEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
