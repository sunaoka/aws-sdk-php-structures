<?php

namespace Sunaoka\Aws\Structures\Glue\RunStatement;

trait RunStatementTrait
{
    /**
     * @param RunStatementRequest $args
     * @return RunStatementResponse
     */
    public function runStatement(RunStatementRequest $args)
    {
        $result = parent::runStatement($args->toArray());
        return new RunStatementResponse($result->toArray());
    }
}
