<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryString
 * @property string $ClientRequestToken
 * @property Shapes\QueryExecutionContext $QueryExecutionContext
 * @property Shapes\ResultConfiguration $ResultConfiguration
 * @property string $WorkGroup
 * @property list<string> $ExecutionParameters
 * @property Shapes\ResultReuseConfiguration $ResultReuseConfiguration
 */
class StartQueryExecutionRequest extends Request
{
    /**
     * @param array{
     *     QueryString: string,
     *     ClientRequestToken?: string,
     *     QueryExecutionContext?: Shapes\QueryExecutionContext,
     *     ResultConfiguration?: Shapes\ResultConfiguration,
     *     WorkGroup?: string,
     *     ExecutionParameters?: list<string>,
     *     ResultReuseConfiguration?: Shapes\ResultReuseConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
