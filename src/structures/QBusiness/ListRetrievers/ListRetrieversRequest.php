<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListRetrievers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class ListRetrieversRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
