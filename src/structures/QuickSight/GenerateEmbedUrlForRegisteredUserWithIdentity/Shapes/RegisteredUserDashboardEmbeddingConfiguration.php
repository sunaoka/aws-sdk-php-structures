<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InitialDashboardId
 * @property RegisteredUserDashboardFeatureConfigurations $FeatureConfigurations
 */
class RegisteredUserDashboardEmbeddingConfiguration extends Shape
{
    /**
     * @param array{
     *     InitialDashboardId: string,
     *     FeatureConfigurations?: RegisteredUserDashboardFeatureConfigurations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
