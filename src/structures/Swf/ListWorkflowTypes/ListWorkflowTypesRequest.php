<?php

namespace Sunaoka\Aws\Structures\Swf\ListWorkflowTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $name
 * @property 'REGISTERED'|'DEPRECATED' $registrationStatus
 * @property string $nextPageToken
 * @property int<0, 1000> $maximumPageSize
 * @property bool $reverseOrder
 */
class ListWorkflowTypesRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     name?: string,
     *     registrationStatus: 'REGISTERED'|'DEPRECATED',
     *     nextPageToken?: string,
     *     maximumPageSize?: int<0, 1000>,
     *     reverseOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
