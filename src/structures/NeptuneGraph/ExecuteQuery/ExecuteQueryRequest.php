<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ExecuteQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $queryString
 * @property 'OPEN_CYPHER' $language
 * @property array<string, Shapes\Document>|null $parameters
 * @property 'ENABLED'|'DISABLED'|'AUTO'|null $planCache
 * @property 'STATIC'|'DETAILS'|null $explainMode
 * @property int|null $queryTimeoutMilliseconds
 */
class ExecuteQueryRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     queryString: string,
     *     language: 'OPEN_CYPHER',
     *     parameters?: array<string, Shapes\Document>|null,
     *     planCache?: 'ENABLED'|'DISABLED'|'AUTO'|null,
     *     explainMode?: 'STATIC'|'DETAILS'|null,
     *     queryTimeoutMilliseconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
