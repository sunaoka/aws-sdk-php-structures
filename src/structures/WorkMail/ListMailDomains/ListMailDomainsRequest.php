<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMailDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListMailDomainsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
