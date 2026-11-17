<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedAccountsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventArn
 * @property string|null $nextToken
 * @property int<10, 100>|null $maxResults
 * @property Shapes\AffectedAccountFilter|null $filter
 */
class DescribeAffectedAccountsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     eventArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<10, 100>|null,
     *     filter?: Shapes\AffectedAccountFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
