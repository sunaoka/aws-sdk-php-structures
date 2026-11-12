<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'AZURE'|'GCP' $provider
 * @property string|null $tenantIdentifier
 * @property string|null $gcpOrganizationId
 * @property string|null $serviceAccountEmail
 * @property \Aws\Api\DateTimeResult $createdTime
 */
class ConnectorSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     provider: 'AZURE'|'GCP',
     *     tenantIdentifier?: string|null,
     *     gcpOrganizationId?: string|null,
     *     serviceAccountEmail?: string|null,
     *     createdTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
