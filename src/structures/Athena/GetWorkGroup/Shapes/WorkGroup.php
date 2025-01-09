<?php

namespace Sunaoka\Aws\Structures\Athena\GetWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ENABLED'|'DISABLED' $State
 * @property WorkGroupConfiguration $Configuration
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $IdentityCenterApplicationArn
 */
class WorkGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     State?: 'ENABLED'|'DISABLED',
     *     Configuration?: WorkGroupConfiguration,
     *     Description?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     IdentityCenterApplicationArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
