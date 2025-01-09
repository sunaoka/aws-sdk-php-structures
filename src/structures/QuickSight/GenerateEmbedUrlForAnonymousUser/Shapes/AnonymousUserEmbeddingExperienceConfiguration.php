<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnonymousUserDashboardEmbeddingConfiguration $Dashboard
 * @property AnonymousUserDashboardVisualEmbeddingConfiguration $DashboardVisual
 * @property AnonymousUserQSearchBarEmbeddingConfiguration $QSearchBar
 * @property AnonymousUserGenerativeQnAEmbeddingConfiguration $GenerativeQnA
 */
class AnonymousUserEmbeddingExperienceConfiguration extends Shape
{
    /**
     * @param array{
     *     Dashboard?: AnonymousUserDashboardEmbeddingConfiguration,
     *     DashboardVisual?: AnonymousUserDashboardVisualEmbeddingConfiguration,
     *     QSearchBar?: AnonymousUserQSearchBarEmbeddingConfiguration,
     *     GenerativeQnA?: AnonymousUserGenerativeQnAEmbeddingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
