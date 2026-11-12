<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $gcpOrganizationId
 * @property string $serviceAccountEmail
 * @property string $workloadIdentityPoolProvider
 */
class GcpConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     gcpOrganizationId?: string|null,
     *     serviceAccountEmail: string,
     *     workloadIdentityPoolProvider: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
