<?php

namespace Sunaoka\Aws\Structures\Rekognition\CopyProjectVersion;

trait CopyProjectVersionTrait
{
    /**
     * @param CopyProjectVersionRequest $args
     * @return CopyProjectVersionResponse
     */
    public function copyProjectVersion(CopyProjectVersionRequest $args)
    {
        $result = parent::copyProjectVersion($args->toArray());
        return new CopyProjectVersionResponse($result->toArray());
    }
}
