<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property 'PROVISIONING'|'READY'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED'|null $Status
 * @property string|null $ErrorMessage
 * @property string|null $Description
 * @property string|null $Role
 * @property SessionCommand|null $Command
 * @property array<string, string>|null $DefaultArguments
 * @property ConnectionsList|null $Connections
 * @property double|null $Progress
 * @property double|null $MaxCapacity
 * @property string|null $SecurityConfiguration
 * @property string|null $GlueVersion
 */
class Session extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     CreatedOn?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PROVISIONING'|'READY'|'FAILED'|'TIMEOUT'|'STOPPING'|'STOPPED'|null,
     *     ErrorMessage?: string|null,
     *     Description?: string|null,
     *     Role?: string|null,
     *     Command?: SessionCommand|null,
     *     DefaultArguments?: array<string, string>|null,
     *     Connections?: ConnectionsList|null,
     *     Progress?: double|null,
     *     MaxCapacity?: double|null,
     *     SecurityConfiguration?: string|null,
     *     GlueVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
