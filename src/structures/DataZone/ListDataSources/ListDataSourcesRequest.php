<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $connectionIdentifier
 * @property string $domainIdentifier
 * @property string|null $environmentIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 * @property string $projectIdentifier
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION'|null $status
 * @property string|null $type
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     connectionIdentifier?: string|null,
     *     domainIdentifier: string,
     *     environmentIdentifier?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     projectIdentifier: string,
     *     status?: 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION'|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
