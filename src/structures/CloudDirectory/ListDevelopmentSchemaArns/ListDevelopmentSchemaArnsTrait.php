<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListDevelopmentSchemaArns;

trait ListDevelopmentSchemaArnsTrait
{
    /**
     * @param ListDevelopmentSchemaArnsRequest $args
     * @return ListDevelopmentSchemaArnsResponse
     */
    public function listDevelopmentSchemaArns(ListDevelopmentSchemaArnsRequest $args)
    {
        $result = parent::listDevelopmentSchemaArns($args->toArray());
        return new ListDevelopmentSchemaArnsResponse($result->toArray());
    }
}
