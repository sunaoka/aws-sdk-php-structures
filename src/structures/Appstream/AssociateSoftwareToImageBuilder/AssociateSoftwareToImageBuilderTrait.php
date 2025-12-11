<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateSoftwareToImageBuilder;

trait AssociateSoftwareToImageBuilderTrait
{
    /**
     * @param AssociateSoftwareToImageBuilderRequest $args
     * @return AssociateSoftwareToImageBuilderResponse
     */
    public function associateSoftwareToImageBuilder(AssociateSoftwareToImageBuilderRequest $args)
    {
        $result = parent::associateSoftwareToImageBuilder($args->toArray());
        return new AssociateSoftwareToImageBuilderResponse($result->toArray());
    }
}
