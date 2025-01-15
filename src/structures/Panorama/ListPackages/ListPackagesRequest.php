<?php

namespace Sunaoka\Aws\Structures\Panorama\ListPackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPackagesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
