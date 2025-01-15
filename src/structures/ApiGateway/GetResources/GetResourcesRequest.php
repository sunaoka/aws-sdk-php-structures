<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string|null $position
 * @property int|null $limit
 * @property list<string>|null $embed
 */
class GetResourcesRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     position?: string|null,
     *     limit?: int|null,
     *     embed?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
