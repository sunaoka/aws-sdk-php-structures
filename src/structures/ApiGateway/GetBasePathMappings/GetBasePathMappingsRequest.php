<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetBasePathMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $domainNameId
 * @property string $position
 * @property int $limit
 */
class GetBasePathMappingsRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string,
     *     position?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
