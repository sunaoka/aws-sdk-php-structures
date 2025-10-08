<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteAppBlock;

trait DeleteAppBlockTrait
{
    /**
     * @param DeleteAppBlockRequest $args
     * @return DeleteAppBlockResponse
     */
    public function deleteAppBlock(DeleteAppBlockRequest $args)
    {
        $result = parent::deleteAppBlock($args->toArray());
        return new DeleteAppBlockResponse($result->toArray());
    }
}
