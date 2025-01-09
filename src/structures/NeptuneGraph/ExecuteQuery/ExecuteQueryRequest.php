<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ExecuteQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $queryString
 * @property 'OPEN_CYPHER' $language
 * @property array<string, Shapes\Document> $parameters
 * @property 'ENABLED'|'DISABLED'|'AUTO' $planCache
 * @property 'STATIC'|'DETAILS' $explainMode
 * @property int $queryTimeoutMilliseconds
 */
class ExecuteQueryRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     queryString: string,
     *     language: 'OPEN_CYPHER',
     *     parameters?: array<string, Shapes\Document>,
     *     planCache?: 'ENABLED'|'DISABLED'|'AUTO',
     *     explainMode?: 'STATIC'|'DETAILS',
     *     queryTimeoutMilliseconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
