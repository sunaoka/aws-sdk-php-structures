<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateBotVersion;

trait CreateBotVersionTrait
{
    /**
     * @param CreateBotVersionRequest $args
     * @return CreateBotVersionResponse
     */
    public function createBotVersion(CreateBotVersionRequest $args)
    {
        $result = parent::createBotVersion($args->toArray());
        return new CreateBotVersionResponse($result->toArray());
    }
}
