<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RegisteredUserDashboardEmbeddingConfiguration|null $Dashboard
 * @property RegisteredUserQuickSightConsoleEmbeddingConfiguration|null $QuickSightConsole
 * @property RegisteredUserQSearchBarEmbeddingConfiguration|null $QSearchBar
 * @property RegisteredUserDashboardVisualEmbeddingConfiguration|null $DashboardVisual
 * @property RegisteredUserGenerativeQnAEmbeddingConfiguration|null $GenerativeQnA
 */
class RegisteredUserEmbeddingExperienceConfiguration extends Shape
{
    /**
     * @param array{
     *     Dashboard?: RegisteredUserDashboardEmbeddingConfiguration|null,
     *     QuickSightConsole?: RegisteredUserQuickSightConsoleEmbeddingConfiguration|null,
     *     QSearchBar?: RegisteredUserQSearchBarEmbeddingConfiguration|null,
     *     DashboardVisual?: RegisteredUserDashboardVisualEmbeddingConfiguration|null,
     *     GenerativeQnA?: RegisteredUserGenerativeQnAEmbeddingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
