<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListMailDomainsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
