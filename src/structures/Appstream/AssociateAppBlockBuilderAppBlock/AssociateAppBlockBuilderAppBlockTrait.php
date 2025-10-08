<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateAppBlockBuilderAppBlock;

trait AssociateAppBlockBuilderAppBlockTrait
{
    /**
     * @param AssociateAppBlockBuilderAppBlockRequest $args
     * @return AssociateAppBlockBuilderAppBlockResponse
     */
    public function associateAppBlockBuilderAppBlock(AssociateAppBlockBuilderAppBlockRequest $args)
    {
        $result = parent::associateAppBlockBuilderAppBlock($args->toArray());
        return new AssociateAppBlockBuilderAppBlockResponse($result->toArray());
    }
}
