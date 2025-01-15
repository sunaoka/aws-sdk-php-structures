<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string|null $position
 * @property int|null $limit
 */
class GetModelsRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     position?: string|null,
     *     limit?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
