<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConfigurationPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property bool|null $ServiceEnabled
 */
class ConfigurationPolicySummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ServiceEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
