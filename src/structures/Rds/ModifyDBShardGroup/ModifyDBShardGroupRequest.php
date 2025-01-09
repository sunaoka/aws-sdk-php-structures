<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBShardGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBShardGroupIdentifier
 * @property double $MaxACU
 * @property double $MinACU
 * @property int $ComputeRedundancy
 */
class ModifyDBShardGroupRequest extends Request
{
    /**
     * @param array{
     *     DBShardGroupIdentifier: string,
     *     MaxACU?: double,
     *     MinACU?: double,
     *     ComputeRedundancy?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
