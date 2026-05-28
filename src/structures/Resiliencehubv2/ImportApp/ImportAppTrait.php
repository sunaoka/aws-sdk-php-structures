<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ImportApp;

trait ImportAppTrait
{
    /**
     * @param ImportAppRequest $args
     * @return ImportAppResponse
     */
    public function importApp(ImportAppRequest $args)
    {
        $result = parent::importApp($args->toArray());
        return new ImportAppResponse($result->toArray());
    }
}
