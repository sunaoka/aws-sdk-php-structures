<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListSecurityRequirementPacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListSecurityRequirementPackFilter|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListSecurityRequirementPacksRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\ListSecurityRequirementPackFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
