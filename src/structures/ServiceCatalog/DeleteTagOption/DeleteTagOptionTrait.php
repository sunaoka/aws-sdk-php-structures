<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteTagOption;

trait DeleteTagOptionTrait
{
    /**
     * @param DeleteTagOptionRequest $args
     * @return DeleteTagOptionResponse
     */
    public function deleteTagOption(DeleteTagOptionRequest $args)
    {
        $result = parent::deleteTagOption($args->toArray());
        return new DeleteTagOptionResponse($result->toArray());
    }
}
