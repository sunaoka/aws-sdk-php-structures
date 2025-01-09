<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedAccountsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventArn
 * @property string $nextToken
 * @property int<10, 100> $maxResults
 */
class DescribeAffectedAccountsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     eventArn: string,
     *     nextToken?: string,
     *     maxResults?: int<10, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
