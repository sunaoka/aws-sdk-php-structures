<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteClientBranding;

trait DeleteClientBrandingTrait
{
    /**
     * @param DeleteClientBrandingRequest $args
     * @return DeleteClientBrandingResponse
     */
    public function deleteClientBranding(DeleteClientBrandingRequest $args)
    {
        $result = parent::deleteClientBranding($args->toArray());
        return new DeleteClientBrandingResponse($result->toArray());
    }
}
