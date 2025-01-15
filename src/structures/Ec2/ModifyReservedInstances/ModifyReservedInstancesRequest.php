<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyReservedInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ReservedInstancesIds
 * @property string|null $ClientToken
 * @property list<Shapes\ReservedInstancesConfiguration> $TargetConfigurations
 */
class ModifyReservedInstancesRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstancesIds: list<string>,
     *     ClientToken?: string|null,
     *     TargetConfigurations: list<Shapes\ReservedInstancesConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
