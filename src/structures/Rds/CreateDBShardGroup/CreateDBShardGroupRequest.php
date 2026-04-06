<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBShardGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBShardGroupIdentifier
 * @property string $DBClusterIdentifier
 * @property int|null $ComputeRedundancy
 * @property double $MaxACU
 * @property double|null $MinACU
 * @property bool|null $PubliclyAccessible
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDBShardGroupRequest extends Request
{
    /**
     * @param array{
     *     DBShardGroupIdentifier: string,
     *     DBClusterIdentifier: string,
     *     ComputeRedundancy?: int|null,
     *     MaxACU: double,
     *     MinACU?: double|null,
     *     PubliclyAccessible?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
