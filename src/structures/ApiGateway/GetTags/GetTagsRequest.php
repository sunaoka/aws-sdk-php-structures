<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $position
 * @property int $limit
 */
class GetTagsRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     position?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
