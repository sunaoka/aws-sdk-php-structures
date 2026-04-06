<?php

namespace Sunaoka\Aws\Structures\Textract\DeleteAdapter;

trait DeleteAdapterTrait
{
    /**
     * @param DeleteAdapterRequest $args
     * @return DeleteAdapterResponse
     */
    public function deleteAdapter(DeleteAdapterRequest $args)
    {
        $result = parent::deleteAdapter($args->toArray());
        return new DeleteAdapterResponse($result->toArray());
    }
}
