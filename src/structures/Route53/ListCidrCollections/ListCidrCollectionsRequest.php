<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrCollections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $MaxResults
 */
class ListCidrCollectionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
