<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryString
 * @property string|null $ClientRequestToken
 * @property Shapes\QueryExecutionContext|null $QueryExecutionContext
 * @property Shapes\ResultConfiguration|null $ResultConfiguration
 * @property string|null $WorkGroup
 * @property list<string>|null $ExecutionParameters
 * @property Shapes\ResultReuseConfiguration|null $ResultReuseConfiguration
 * @property Shapes\EngineConfiguration|null $EngineConfiguration
 */
class StartQueryExecutionRequest extends Request
{
    /**
     * @param array{
     *     QueryString: string,
     *     ClientRequestToken?: string|null,
     *     QueryExecutionContext?: Shapes\QueryExecutionContext|null,
     *     ResultConfiguration?: Shapes\ResultConfiguration|null,
     *     WorkGroup?: string|null,
     *     ExecutionParameters?: list<string>|null,
     *     ResultReuseConfiguration?: Shapes\ResultReuseConfiguration|null,
     *     EngineConfiguration?: Shapes\EngineConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
