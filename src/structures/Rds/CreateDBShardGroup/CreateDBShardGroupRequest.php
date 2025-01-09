<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBShardGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBShardGroupIdentifier
 * @property string $DBClusterIdentifier
 * @property int $ComputeRedundancy
 * @property double $MaxACU
 * @property double $MinACU
 * @property bool $PubliclyAccessible
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBShardGroupRequest extends Request
{
    /**
     * @param array{
     *     DBShardGroupIdentifier: string,
     *     DBClusterIdentifier: string,
     *     ComputeRedundancy?: int,
     *     MaxACU: double,
     *     MinACU?: double,
     *     PubliclyAccessible?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
