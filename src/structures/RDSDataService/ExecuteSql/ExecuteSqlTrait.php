<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql;

trait ExecuteSqlTrait
{
    /**
     * @param ExecuteSqlRequest $args
     * @return ExecuteSqlResponse
     */
    public function executeSql(ExecuteSqlRequest $args)
    {
        $result = parent::executeSql($args->toArray());
        return new ExecuteSqlResponse($result->toArray());
    }
}
