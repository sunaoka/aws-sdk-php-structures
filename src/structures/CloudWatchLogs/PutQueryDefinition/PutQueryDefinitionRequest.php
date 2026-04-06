<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutQueryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CWLI'|'SQL'|'PPL'|null $queryLanguage
 * @property string $name
 * @property string|null $queryDefinitionId
 * @property list<string>|null $logGroupNames
 * @property string $queryString
 * @property string|null $clientToken
 */
class PutQueryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL'|null,
     *     name: string,
     *     queryDefinitionId?: string|null,
     *     logGroupNames?: list<string>|null,
     *     queryString: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
