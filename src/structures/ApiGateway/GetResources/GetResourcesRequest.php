<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $position
 * @property int $limit
 * @property list<string> $embed
 */
class GetResourcesRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     position?: string,
     *     limit?: int,
     *     embed?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
