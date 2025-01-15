<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string|null $NextToken
 * @property string|null $MaxResults
 */
class ListCidrLocationsRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     NextToken?: string|null,
     *     MaxResults?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
