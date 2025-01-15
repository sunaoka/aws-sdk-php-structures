<?php

namespace Sunaoka\Aws\Structures\Swf\ListActivityTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $name
 * @property 'REGISTERED'|'DEPRECATED' $registrationStatus
 * @property string|null $nextPageToken
 * @property int<0, 1000>|null $maximumPageSize
 * @property bool|null $reverseOrder
 */
class ListActivityTypesRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     name?: string|null,
     *     registrationStatus: 'REGISTERED'|'DEPRECATED',
     *     nextPageToken?: string|null,
     *     maximumPageSize?: int<0, 1000>|null,
     *     reverseOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
