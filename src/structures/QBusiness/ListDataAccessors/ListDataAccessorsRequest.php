<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataAccessors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $nextToken
 * @property int<1, 10> $maxResults
 */
class ListDataAccessorsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
