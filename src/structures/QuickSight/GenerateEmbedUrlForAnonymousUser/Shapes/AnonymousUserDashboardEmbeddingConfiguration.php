<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InitialDashboardId
 * @property list<'SHARED_VIEW'>|null $EnabledFeatures
 * @property list<'SHARED_VIEW'>|null $DisabledFeatures
 * @property AnonymousUserDashboardFeatureConfigurations|null $FeatureConfigurations
 */
class AnonymousUserDashboardEmbeddingConfiguration extends Shape
{
    /**
     * @param array{
     *     InitialDashboardId: string,
     *     EnabledFeatures?: list<'SHARED_VIEW'>|null,
     *     DisabledFeatures?: list<'SHARED_VIEW'>|null,
     *     FeatureConfigurations?: AnonymousUserDashboardFeatureConfigurations|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
