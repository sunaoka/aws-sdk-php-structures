<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\GenerateBotElement;

trait GenerateBotElementTrait
{
    /**
     * @param GenerateBotElementRequest $args
     * @return GenerateBotElementResponse
     */
    public function generateBotElement(GenerateBotElementRequest $args)
    {
        $result = parent::generateBotElement($args->toArray());
        return new GenerateBotElementResponse($result->toArray());
    }
}
