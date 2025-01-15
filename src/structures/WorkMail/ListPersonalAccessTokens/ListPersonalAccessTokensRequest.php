<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListPersonalAccessTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $UserId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListPersonalAccessTokensRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
