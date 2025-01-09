<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListRetrievers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListRetrieversRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
