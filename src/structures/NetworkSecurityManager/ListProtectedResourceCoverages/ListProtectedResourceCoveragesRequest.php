<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListProtectedResourceCoverages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property 'Rule'|'Template'|'Policy'|'Deployment'|'Scope'|null $entityType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListProtectedResourceCoveragesRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     entityType?: 'Rule'|'Template'|'Policy'|'Deployment'|'Scope'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
