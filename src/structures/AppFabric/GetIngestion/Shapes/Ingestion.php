<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetIngestion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $appBundleArn
 * @property string $app
 * @property string $tenantId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'enabled'|'disabled' $state
 * @property 'auditLog' $ingestionType
 */
class Ingestion extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     appBundleArn: string,
     *     app: string,
     *     tenantId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     state: 'enabled'|'disabled',
     *     ingestionType: 'auditLog'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
