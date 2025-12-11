<?php

namespace Sunaoka\Aws\Structures\Appstream\DisassociateSoftwareFromImageBuilder;

trait DisassociateSoftwareFromImageBuilderTrait
{
    /**
     * @param DisassociateSoftwareFromImageBuilderRequest $args
     * @return DisassociateSoftwareFromImageBuilderResponse
     */
    public function disassociateSoftwareFromImageBuilder(DisassociateSoftwareFromImageBuilderRequest $args)
    {
        $result = parent::disassociateSoftwareFromImageBuilder($args->toArray());
        return new DisassociateSoftwareFromImageBuilderResponse($result->toArray());
    }
}
