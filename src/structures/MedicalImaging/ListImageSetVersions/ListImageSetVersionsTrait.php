<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListImageSetVersions;

trait ListImageSetVersionsTrait
{
    /**
     * @param ListImageSetVersionsRequest $args
     * @return ListImageSetVersionsResponse
     */
    public function listImageSetVersions(ListImageSetVersionsRequest $args)
    {
        $result = parent::listImageSetVersions($args->toArray());
        return new ListImageSetVersionsResponse($result->toArray());
    }
}
