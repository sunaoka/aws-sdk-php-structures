<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetBasePathMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string|null $position
 * @property int|null $limit
 */
class GetBasePathMappingsRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     position?: string|null,
     *     limit?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
