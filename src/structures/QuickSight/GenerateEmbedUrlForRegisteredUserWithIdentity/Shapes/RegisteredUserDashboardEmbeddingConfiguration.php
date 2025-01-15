<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InitialDashboardId
 * @property RegisteredUserDashboardFeatureConfigurations|null $FeatureConfigurations
 */
class RegisteredUserDashboardEmbeddingConfiguration extends Shape
{
    /**
     * @param array{
     *     InitialDashboardId: string,
     *     FeatureConfigurations?: RegisteredUserDashboardFeatureConfigurations|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
