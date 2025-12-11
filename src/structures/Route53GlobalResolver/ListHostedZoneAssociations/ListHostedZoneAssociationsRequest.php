<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListHostedZoneAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $resourceArn
 */
class ListHostedZoneAssociationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
