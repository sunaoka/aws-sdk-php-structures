<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateName
 * @property string|null $description
 * @property string $defaultStackName
 * @property string $templateUrl
 * @property string $iamPolicy
 */
class SaasCloudFormationDeploymentTemplate extends Shape
{
    /**
     * @param array{
     *     templateName: string,
     *     description?: string|null,
     *     defaultStackName: string,
     *     templateUrl: string,
     *     iamPolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
