<?php

namespace Sunaoka\Aws\Structures\Swf\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextPageToken
 * @property 'REGISTERED'|'DEPRECATED' $registrationStatus
 * @property int $maximumPageSize
 * @property bool $reverseOrder
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     nextPageToken?: string,
     *     registrationStatus: 'REGISTERED'|'DEPRECATED',
     *     maximumPageSize?: int,
     *     reverseOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
