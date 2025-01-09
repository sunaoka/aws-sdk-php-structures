<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $versionOrAlias
 */
class GetBotRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     versionOrAlias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
