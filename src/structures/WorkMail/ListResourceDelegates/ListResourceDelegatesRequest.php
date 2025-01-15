<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResourceDelegates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ResourceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListResourceDelegatesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ResourceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
