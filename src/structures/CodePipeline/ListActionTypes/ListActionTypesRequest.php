<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'ThirdParty'|'Custom' $actionOwnerFilter
 * @property string $nextToken
 * @property string $regionFilter
 */
class ListActionTypesRequest extends Request
{
    /**
     * @param array{
     *     actionOwnerFilter?: 'AWS'|'ThirdParty'|'Custom',
     *     nextToken?: string,
     *     regionFilter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
