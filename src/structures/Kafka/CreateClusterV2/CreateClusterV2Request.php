<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property array<string, string>|null $Tags
 * @property Shapes\ProvisionedRequest|null $Provisioned
 * @property Shapes\ServerlessRequest|null $Serverless
 */
class CreateClusterV2Request extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     Tags?: array<string, string>|null,
     *     Provisioned?: Shapes\ProvisionedRequest|null,
     *     Serverless?: Shapes\ServerlessRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
