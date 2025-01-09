<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedAccountsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventArn
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeAffectedAccountsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     eventArn: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
