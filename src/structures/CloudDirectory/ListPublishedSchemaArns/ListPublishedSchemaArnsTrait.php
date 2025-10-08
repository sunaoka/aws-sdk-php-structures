<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListPublishedSchemaArns;

trait ListPublishedSchemaArnsTrait
{
    /**
     * @param ListPublishedSchemaArnsRequest $args
     * @return ListPublishedSchemaArnsResponse
     */
    public function listPublishedSchemaArns(ListPublishedSchemaArnsRequest $args)
    {
        $result = parent::listPublishedSchemaArns($args->toArray());
        return new ListPublishedSchemaArnsResponse($result->toArray());
    }
}
