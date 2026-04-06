<?php

namespace Sunaoka\Aws\Structures\Textract\DeleteAdapterVersion;

trait DeleteAdapterVersionTrait
{
    /**
     * @param DeleteAdapterVersionRequest $args
     * @return DeleteAdapterVersionResponse
     */
    public function deleteAdapterVersion(DeleteAdapterVersionRequest $args)
    {
        $result = parent::deleteAdapterVersion($args->toArray());
        return new DeleteAdapterVersionResponse($result->toArray());
    }
}
