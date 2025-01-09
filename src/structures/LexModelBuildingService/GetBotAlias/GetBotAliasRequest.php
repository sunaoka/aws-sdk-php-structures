<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $botName
 */
class GetBotAliasRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     botName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
