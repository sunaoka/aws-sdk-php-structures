<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlock;

trait CreateAppBlockTrait
{
    /**
     * @param CreateAppBlockRequest $args
     * @return CreateAppBlockResponse
     */
    public function createAppBlock(CreateAppBlockRequest $args)
    {
        $result = parent::createAppBlock($args->toArray());
        return new CreateAppBlockResponse($result->toArray());
    }
}
