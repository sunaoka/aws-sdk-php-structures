<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBot;

trait PutBotTrait
{
    /**
     * @param PutBotRequest $args
     * @return PutBotResponse
     */
    public function putBot(PutBotRequest $args)
    {
        $result = parent::putBot($args->toArray());
        return new PutBotResponse($result->toArray());
    }
}
