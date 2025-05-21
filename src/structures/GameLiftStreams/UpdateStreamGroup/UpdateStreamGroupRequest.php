<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateStreamGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Identifier
 * @property list<Shapes\LocationConfiguration>|null $LocationConfigurations
 */
class UpdateStreamGroupRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Identifier: string,
     *     LocationConfigurations?: list<Shapes\LocationConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
