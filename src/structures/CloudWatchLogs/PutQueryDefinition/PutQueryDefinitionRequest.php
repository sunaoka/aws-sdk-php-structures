<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutQueryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 * @property string $name
 * @property string $queryDefinitionId
 * @property list<string> $logGroupNames
 * @property string $queryString
 * @property string $clientToken
 */
class PutQueryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL',
     *     name: string,
     *     queryDefinitionId?: string,
     *     logGroupNames?: list<string>,
     *     queryString: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
