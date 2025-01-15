<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\RoutingStrategy $RoutingStrategy
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAliasRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     RoutingStrategy: Shapes\RoutingStrategy,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
