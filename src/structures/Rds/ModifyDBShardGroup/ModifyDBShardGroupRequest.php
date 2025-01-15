<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBShardGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBShardGroupIdentifier
 * @property double|null $MaxACU
 * @property double|null $MinACU
 * @property int|null $ComputeRedundancy
 */
class ModifyDBShardGroupRequest extends Request
{
    /**
     * @param array{
     *     DBShardGroupIdentifier: string,
     *     MaxACU?: double|null,
     *     MinACU?: double|null,
     *     ComputeRedundancy?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
