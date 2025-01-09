<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $position
 * @property int $limit
 */
class GetModelsRequest extends Request
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
