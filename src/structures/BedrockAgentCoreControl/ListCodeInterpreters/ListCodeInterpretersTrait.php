<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListCodeInterpreters;

trait ListCodeInterpretersTrait
{
    /**
     * @param ListCodeInterpretersRequest $args
     * @return ListCodeInterpretersResponse
     */
    public function listCodeInterpreters(ListCodeInterpretersRequest $args)
    {
        $result = parent::listCodeInterpreters($args->toArray());
        return new ListCodeInterpretersResponse($result->toArray());
    }
}
