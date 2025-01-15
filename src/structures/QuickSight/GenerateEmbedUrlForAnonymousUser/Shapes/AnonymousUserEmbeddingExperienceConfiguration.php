<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForAnonymousUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnonymousUserDashboardEmbeddingConfiguration|null $Dashboard
 * @property AnonymousUserDashboardVisualEmbeddingConfiguration|null $DashboardVisual
 * @property AnonymousUserQSearchBarEmbeddingConfiguration|null $QSearchBar
 * @property AnonymousUserGenerativeQnAEmbeddingConfiguration|null $GenerativeQnA
 */
class AnonymousUserEmbeddingExperienceConfiguration extends Shape
{
    /**
     * @param array{
     *     Dashboard?: AnonymousUserDashboardEmbeddingConfiguration|null,
     *     DashboardVisual?: AnonymousUserDashboardVisualEmbeddingConfiguration|null,
     *     QSearchBar?: AnonymousUserQSearchBarEmbeddingConfiguration|null,
     *     GenerativeQnA?: AnonymousUserGenerativeQnAEmbeddingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
