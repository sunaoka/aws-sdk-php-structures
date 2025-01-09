<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListPersonalAccessTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListPersonalAccessTokensRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
