<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\RoutingStrategy $RoutingStrategy
 * @property list<Shapes\Tag> $Tags
 */
class CreateAliasRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     RoutingStrategy: Shapes\RoutingStrategy,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
