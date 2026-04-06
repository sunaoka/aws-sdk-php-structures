<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueryDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CWLI'|'SQL'|'PPL'|null $queryLanguage
 * @property string|null $queryDefinitionId
 * @property string|null $name
 * @property string|null $queryString
 * @property int<0, max>|null $lastModified
 * @property list<string>|null $logGroupNames
 */
class QueryDefinition extends Shape
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL'|null,
     *     queryDefinitionId?: string|null,
     *     name?: string|null,
     *     queryString?: string|null,
     *     lastModified?: int<0, max>|null,
     *     logGroupNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
