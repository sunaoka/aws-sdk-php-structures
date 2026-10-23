<?php

namespace Sunaoka\Aws\Structures\Continuum\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $integrationArn
 * @property string $name
 * @property 'GITHUB'|'GITLAB'|'S3' $integrationType
 * @property ProviderDetails $providerDetails
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class IntegrationSummary extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     integrationArn: string,
     *     name: string,
     *     integrationType: 'GITHUB'|'GITLAB'|'S3',
     *     providerDetails: ProviderDetails,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
