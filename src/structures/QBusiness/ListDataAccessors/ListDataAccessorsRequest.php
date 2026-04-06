<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataAccessors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $nextToken
 * @property int<1, 10>|null $maxResults
 */
class ListDataAccessorsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
