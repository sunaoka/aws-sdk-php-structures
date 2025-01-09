<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RegisteredUserDashboardEmbeddingConfiguration $Dashboard
 * @property RegisteredUserQuickSightConsoleEmbeddingConfiguration $QuickSightConsole
 * @property RegisteredUserQSearchBarEmbeddingConfiguration $QSearchBar
 * @property RegisteredUserDashboardVisualEmbeddingConfiguration $DashboardVisual
 * @property RegisteredUserGenerativeQnAEmbeddingConfiguration $GenerativeQnA
 */
class RegisteredUserEmbeddingExperienceConfiguration extends Shape
{
    /**
     * @param array{
     *     Dashboard?: RegisteredUserDashboardEmbeddingConfiguration,
     *     QuickSightConsole?: RegisteredUserQuickSightConsoleEmbeddingConfiguration,
     *     QSearchBar?: RegisteredUserQSearchBarEmbeddingConfiguration,
     *     DashboardVisual?: RegisteredUserDashboardVisualEmbeddingConfiguration,
     *     GenerativeQnA?: RegisteredUserGenerativeQnAEmbeddingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
