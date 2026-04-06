<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListVehicles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $modelManifestArn
 * @property list<string>|null $attributeNames
 * @property list<string>|null $attributeValues
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListVehiclesRequest extends Request
{
    /**
     * @param array{
     *     modelManifestArn?: string|null,
     *     attributeNames?: list<string>|null,
     *     attributeValues?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
