<?php

namespace Sunaoka\Aws\Structures\Swf\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextPageToken
 * @property 'REGISTERED'|'DEPRECATED' $registrationStatus
 * @property int<0, 1000>|null $maximumPageSize
 * @property bool|null $reverseOrder
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     nextPageToken?: string|null,
     *     registrationStatus: 'REGISTERED'|'DEPRECATED',
     *     maximumPageSize?: int<0, 1000>|null,
     *     reverseOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
