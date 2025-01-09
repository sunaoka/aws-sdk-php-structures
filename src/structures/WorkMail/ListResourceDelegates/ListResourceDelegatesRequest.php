<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResourceDelegates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ResourceId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListResourceDelegatesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ResourceId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
