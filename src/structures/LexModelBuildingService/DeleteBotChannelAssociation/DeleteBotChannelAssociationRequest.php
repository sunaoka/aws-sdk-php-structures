<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteBotChannelAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $botName
 * @property string $botAlias
 */
class DeleteBotChannelAssociationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     botName: string,
     *     botAlias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
