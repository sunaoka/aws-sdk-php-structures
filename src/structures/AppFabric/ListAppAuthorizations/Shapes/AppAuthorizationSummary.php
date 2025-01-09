<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListAppAuthorizations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appAuthorizationArn
 * @property string $appBundleArn
 * @property string $app
 * @property Tenant $tenant
 * @property 'PendingConnect'|'Connected'|'ConnectionValidationFailed'|'TokenAutoRotationFailed' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AppAuthorizationSummary extends Shape
{
    /**
     * @param array{
     *     appAuthorizationArn: string,
     *     appBundleArn: string,
     *     app: string,
     *     tenant: Tenant,
     *     status: 'PendingConnect'|'Connected'|'ConnectionValidationFailed'|'TokenAutoRotationFailed',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
