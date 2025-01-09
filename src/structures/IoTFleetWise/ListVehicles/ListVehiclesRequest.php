<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListVehicles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelManifestArn
 * @property list<string> $attributeNames
 * @property list<string> $attributeValues
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListVehiclesRequest extends Request
{
    /**
     * @param array{
     *     modelManifestArn?: string,
     *     attributeNames?: list<string>,
     *     attributeValues?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
