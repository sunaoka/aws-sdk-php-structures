<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBotAlias;

trait PutBotAliasTrait
{
    /**
     * @param PutBotAliasRequest $args
     * @return PutBotAliasResponse
     */
    public function putBotAlias(PutBotAliasRequest $args)
    {
        $result = parent::putBotAlias($args->toArray());
        return new PutBotAliasResponse($result->toArray());
    }
}
