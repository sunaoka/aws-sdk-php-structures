<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string|null $position
 * @property int|null $limit
 */
class GetTagsRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     position?: string|null,
     *     limit?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
