<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionIdentifier
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property int $maxResults
 * @property string $name
 * @property string $nextToken
 * @property string $projectIdentifier
 * @property 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION' $status
 * @property string $type
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     connectionIdentifier?: string,
     *     domainIdentifier: string,
     *     environmentIdentifier?: string,
     *     maxResults?: int,
     *     name?: string,
     *     nextToken?: string,
     *     projectIdentifier: string,
     *     status?: 'CREATING'|'FAILED_CREATION'|'READY'|'UPDATING'|'FAILED_UPDATE'|'RUNNING'|'DELETING'|'FAILED_DELETION',
     *     type?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
