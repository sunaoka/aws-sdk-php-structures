<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'ACTIVE'|'DRAFT'|'DISABLED'|null $status
 * @property 'CUSTOMER'|'AWS'|null $templateOwner
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: 'ACTIVE'|'DRAFT'|'DISABLED'|null,
     *     templateOwner?: 'CUSTOMER'|'AWS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
