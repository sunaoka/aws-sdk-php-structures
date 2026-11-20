<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListAvailableModules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $moduleId
 * @property string $moduleArn
 * @property string $moduleName
 * @property 'MARKETPLACE'|'PRIVATE'|'AWS_BUILT_IN' $subscriptionType
 * @property 'ACTIVE'|'EXPIRED' $subscriptionStatus
 * @property string|null $marketplaceProductId
 */
class AvailableModuleSummary extends Shape
{
    /**
     * @param array{
     *     moduleId: string,
     *     moduleArn: string,
     *     moduleName: string,
     *     subscriptionType: 'MARKETPLACE'|'PRIVATE'|'AWS_BUILT_IN',
     *     subscriptionStatus: 'ACTIVE'|'EXPIRED',
     *     marketplaceProductId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
