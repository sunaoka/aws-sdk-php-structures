<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $projectIdentifier
 * @property string|null $environmentIdentifier
 * @property string|null $connectionIdentifier
 * @property string|null $type
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION'|null $status
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     projectIdentifier: string,
     *     environmentIdentifier?: string|null,
     *     connectionIdentifier?: string|null,
     *     type?: string|null,
     *     status?: 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION'|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
