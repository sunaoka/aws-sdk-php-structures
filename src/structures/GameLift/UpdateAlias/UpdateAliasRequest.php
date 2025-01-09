<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 * @property string $Name
 * @property string $Description
 * @property Shapes\RoutingStrategy $RoutingStrategy
 */
class UpdateAliasRequest extends Request
{
    /**
     * @param array{
     *     AliasId: string,
     *     Name?: string,
     *     Description?: string,
     *     RoutingStrategy?: Shapes\RoutingStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
