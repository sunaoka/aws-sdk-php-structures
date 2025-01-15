<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property 'CFN_STACK'|'RESOURCE_TAG_VALUE' $resourceType
 * @property string $resource
 * @property string|null $nextToken
 * @property list<'SUCCESS'|'FAILED'|'IN_PROGRESS'|'SKIPPED'>|null $resourceTagStatus
 * @property int<1, 100>|null $maxResults
 */
class GetAssociatedResourceRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     resourceType: 'CFN_STACK'|'RESOURCE_TAG_VALUE',
     *     resource: string,
     *     nextToken?: string|null,
     *     resourceTagStatus?: list<'SUCCESS'|'FAILED'|'IN_PROGRESS'|'SKIPPED'>|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
