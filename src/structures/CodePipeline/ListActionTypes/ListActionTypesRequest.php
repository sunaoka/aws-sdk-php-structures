<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'ThirdParty'|'Custom'|null $actionOwnerFilter
 * @property string|null $nextToken
 * @property string|null $regionFilter
 */
class ListActionTypesRequest extends Request
{
    /**
     * @param array{
     *     actionOwnerFilter?: 'AWS'|'ThirdParty'|'Custom'|null,
     *     nextToken?: string|null,
     *     regionFilter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
