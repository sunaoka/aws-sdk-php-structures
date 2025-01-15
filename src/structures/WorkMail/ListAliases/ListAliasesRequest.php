<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
