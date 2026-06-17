<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListSecurityRequirements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListSecurityRequirementsRequest extends Request
{
    /**
     * @param array{
     *     packId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
