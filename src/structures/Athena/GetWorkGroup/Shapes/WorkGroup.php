<?php

namespace Sunaoka\Aws\Structures\Athena\GetWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property WorkGroupConfiguration|null $Configuration
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $IdentityCenterApplicationArn
 */
class WorkGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     Configuration?: WorkGroupConfiguration|null,
     *     Description?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     IdentityCenterApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
