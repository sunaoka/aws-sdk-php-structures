<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $NextToken
 * @property string $MaxResults
 */
class ListCidrLocationsRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     NextToken?: string,
     *     MaxResults?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
