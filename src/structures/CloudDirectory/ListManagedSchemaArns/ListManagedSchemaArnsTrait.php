<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListManagedSchemaArns;

trait ListManagedSchemaArnsTrait
{
    /**
     * @param ListManagedSchemaArnsRequest $args
     * @return ListManagedSchemaArnsResponse
     */
    public function listManagedSchemaArns(ListManagedSchemaArnsRequest $args)
    {
        $result = parent::listManagedSchemaArns($args->toArray());
        return new ListManagedSchemaArnsResponse($result->toArray());
    }
}
