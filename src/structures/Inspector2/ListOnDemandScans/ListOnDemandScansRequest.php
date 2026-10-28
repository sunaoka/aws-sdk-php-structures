<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListOnDemandScans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property 'AMI' $resourceType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListOnDemandScansRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     resourceType: 'AMI',
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
