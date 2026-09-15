<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListResiliencyGroupAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resiliencyGroupId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListResiliencyGroupAssociationsRequest extends Request
{
    /**
     * @param array{
     *     resiliencyGroupId: string,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
