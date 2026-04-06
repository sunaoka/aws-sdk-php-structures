<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse;

trait ConverseTrait
{
    /**
     * @param ConverseRequest $args
     * @return ConverseResponse
     */
    public function converse(ConverseRequest $args)
    {
        $result = parent::converse($args->toArray());
        return new ConverseResponse($result->toArray());
    }
}
