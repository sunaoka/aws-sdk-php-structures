<?php

namespace Sunaoka\Aws\Structures\Appstream\DisassociateAppBlockBuilderAppBlock;

trait DisassociateAppBlockBuilderAppBlockTrait
{
    /**
     * @param DisassociateAppBlockBuilderAppBlockRequest $args
     * @return DisassociateAppBlockBuilderAppBlockResponse
     */
    public function disassociateAppBlockBuilderAppBlock(DisassociateAppBlockBuilderAppBlockRequest $args)
    {
        $result = parent::disassociateAppBlockBuilderAppBlock($args->toArray());
        return new DisassociateAppBlockBuilderAppBlockResponse($result->toArray());
    }
}
