<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetAuthorizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $position
 * @property int $limit
 */
class GetAuthorizersRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     position?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
