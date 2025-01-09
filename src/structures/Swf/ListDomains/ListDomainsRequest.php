<?php

namespace Sunaoka\Aws\Structures\Swf\ListDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextPageToken
 * @property 'REGISTERED'|'DEPRECATED' $registrationStatus
 * @property int<0, 1000> $maximumPageSize
 * @property bool $reverseOrder
 */
class ListDomainsRequest extends Request
{
    /**
     * @param array{
     *     nextPageToken?: string,
     *     registrationStatus: 'REGISTERED'|'DEPRECATED',
     *     maximumPageSize?: int<0, 1000>,
     *     reverseOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
