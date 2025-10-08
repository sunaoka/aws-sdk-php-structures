<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportClientBranding;

trait ImportClientBrandingTrait
{
    /**
     * @param ImportClientBrandingRequest $args
     * @return ImportClientBrandingResponse
     */
    public function importClientBranding(ImportClientBrandingRequest $args)
    {
        $result = parent::importClientBranding($args->toArray());
        return new ImportClientBrandingResponse($result->toArray());
    }
}
