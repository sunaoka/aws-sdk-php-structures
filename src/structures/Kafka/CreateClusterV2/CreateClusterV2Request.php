<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property array<string, string> $Tags
 * @property Shapes\ProvisionedRequest $Provisioned
 * @property Shapes\ServerlessRequest $Serverless
 */
class CreateClusterV2Request extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     Tags?: array<string, string>,
     *     Provisioned?: Shapes\ProvisionedRequest,
     *     Serverless?: Shapes\ServerlessRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
