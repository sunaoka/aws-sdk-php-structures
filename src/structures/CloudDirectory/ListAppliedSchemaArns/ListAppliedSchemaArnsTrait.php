<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListAppliedSchemaArns;

trait ListAppliedSchemaArnsTrait
{
    /**
     * @param ListAppliedSchemaArnsRequest $args
     * @return ListAppliedSchemaArnsResponse
     */
    public function listAppliedSchemaArns(ListAppliedSchemaArnsRequest $args)
    {
        $result = parent::listAppliedSchemaArns($args->toArray());
        return new ListAppliedSchemaArnsResponse($result->toArray());
    }
}
