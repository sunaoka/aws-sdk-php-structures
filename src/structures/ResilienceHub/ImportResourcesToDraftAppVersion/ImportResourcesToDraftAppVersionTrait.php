<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ImportResourcesToDraftAppVersion;

trait ImportResourcesToDraftAppVersionTrait
{
    /**
     * @param ImportResourcesToDraftAppVersionRequest $args
     * @return ImportResourcesToDraftAppVersionResponse
     */
    public function importResourcesToDraftAppVersion(ImportResourcesToDraftAppVersionRequest $args)
    {
        $result = parent::importResourcesToDraftAppVersion($args->toArray());
        return new ImportResourcesToDraftAppVersionResponse($result->toArray());
    }
}
