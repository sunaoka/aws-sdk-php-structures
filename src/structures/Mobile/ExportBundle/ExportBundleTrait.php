<?php

namespace Sunaoka\Aws\Structures\Mobile\ExportBundle;

trait ExportBundleTrait
{
    /**
     * @param ExportBundleRequest $args
     * @return ExportBundleResponse
     */
    public function exportBundle(ExportBundleRequest $args)
    {
        $result = parent::exportBundle($args->toArray());
        return new ExportBundleResponse($result->toArray());
    }
}
