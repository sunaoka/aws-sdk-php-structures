<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance;

trait ImportInstanceTrait
{
    /**
     * @param ImportInstanceRequest $args
     * @return ImportInstanceResponse
     */
    public function importInstance(ImportInstanceRequest $args)
    {
        $result = parent::importInstance($args->toArray());
        return new ImportInstanceResponse($result->toArray());
    }
}
