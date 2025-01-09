<?php

namespace Sunaoka\Aws\Structures\Swf\ListActivityTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $name
 * @property 'REGISTERED'|'DEPRECATED' $registrationStatus
 * @property string $nextPageToken
 * @property int $maximumPageSize
 * @property bool $reverseOrder
 */
class ListActivityTypesRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     name?: string,
     *     registrationStatus: 'REGISTERED'|'DEPRECATED',
     *     nextPageToken?: string,
     *     maximumPageSize?: int,
     *     reverseOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
