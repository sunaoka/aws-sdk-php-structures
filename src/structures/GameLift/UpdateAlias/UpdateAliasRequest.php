<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\RoutingStrategy|null $RoutingStrategy
 */
class UpdateAliasRequest extends Request
{
    /**
     * @param array{
     *     AliasId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     RoutingStrategy?: Shapes\RoutingStrategy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
