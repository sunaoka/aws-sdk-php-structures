<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $position
 * @property int $limit
 */
class GetDeploymentsRequest extends Request
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
