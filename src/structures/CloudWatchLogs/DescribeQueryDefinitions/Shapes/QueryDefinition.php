<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueryDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 * @property string $queryDefinitionId
 * @property string $name
 * @property string $queryString
 * @property int<0, max> $lastModified
 * @property list<string> $logGroupNames
 */
class QueryDefinition extends Shape
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL',
     *     queryDefinitionId?: string,
     *     name?: string,
     *     queryString?: string,
     *     lastModified?: int<0, max>,
     *     logGroupNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
