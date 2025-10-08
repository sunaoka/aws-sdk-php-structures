<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListExports;

trait ListExportsTrait
{
    /**
     * @param ListExportsRequest $args
     * @return ListExportsResponse
     */
    public function listExports(ListExportsRequest $args)
    {
        $result = parent::listExports($args->toArray());
        return new ListExportsResponse($result->toArray());
    }
}
