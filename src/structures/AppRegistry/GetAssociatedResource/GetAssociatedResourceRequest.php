<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property 'CFN_STACK'|'RESOURCE_TAG_VALUE' $resourceType
 * @property string $resource
 * @property string $nextToken
 * @property list<'SUCCESS'|'FAILED'|'IN_PROGRESS'|'SKIPPED'> $resourceTagStatus
 * @property int<1, 100> $maxResults
 */
class GetAssociatedResourceRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     resourceType: 'CFN_STACK'|'RESOURCE_TAG_VALUE',
     *     resource: string,
     *     nextToken?: string,
     *     resourceTagStatus?: list<'SUCCESS'|'FAILED'|'IN_PROGRESS'|'SKIPPED'>,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
