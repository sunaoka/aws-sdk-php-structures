<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InitialDashboardId
 * @property list<'SHARED_VIEW'> $EnabledFeatures
 * @property list<'SHARED_VIEW'> $DisabledFeatures
 * @property AnonymousUserDashboardFeatureConfigurations $FeatureConfigurations
 */
class AnonymousUserDashboardEmbeddingConfiguration extends Shape
{
    /**
     * @param array{
     *     InitialDashboardId: string,
     *     EnabledFeatures?: list<'SHARED_VIEW'>,
     *     DisabledFeatures?: list<'SHARED_VIEW'>,
     *     FeatureConfigurations?: AnonymousUserDashboardFeatureConfigurations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
