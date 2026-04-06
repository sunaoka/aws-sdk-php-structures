<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateStreamGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property list<Shapes\LocationConfiguration>|null $LocationConfigurations
 * @property string|null $Description
 * @property string|null $DefaultApplicationIdentifier
 */
class UpdateStreamGroupRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     LocationConfigurations?: list<Shapes\LocationConfiguration>|null,
     *     Description?: string|null,
     *     DefaultApplicationIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
