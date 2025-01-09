<?php

namespace Sunaoka\Aws\Structures\AppSync\ListSourceApiAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $nextToken
 * @property int<0, 25> $maxResults
 */
class ListSourceApiAssociationsRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     nextToken?: string,
     *     maxResults?: int<0, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
