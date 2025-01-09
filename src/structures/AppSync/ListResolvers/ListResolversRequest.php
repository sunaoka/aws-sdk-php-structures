<?php

namespace Sunaoka\Aws\Structures\AppSync\ListResolvers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $typeName
 * @property string $nextToken
 * @property int<0, 25> $maxResults
 */
class ListResolversRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     typeName: string,
     *     nextToken?: string,
     *     maxResults?: int<0, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
