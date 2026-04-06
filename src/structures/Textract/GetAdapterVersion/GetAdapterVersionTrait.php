<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapterVersion;

trait GetAdapterVersionTrait
{
    /**
     * @param GetAdapterVersionRequest $args
     * @return GetAdapterVersionResponse
     */
    public function getAdapterVersion(GetAdapterVersionRequest $args)
    {
        $result = parent::getAdapterVersion($args->toArray());
        return new GetAdapterVersionResponse($result->toArray());
    }
}
