<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RegisteredUserDashboardEmbeddingConfiguration|null $Dashboard
 * @property RegisteredUserQuickSightConsoleEmbeddingConfiguration|null $QuickSightConsole
 * @property RegisteredUserQSearchBarEmbeddingConfiguration|null $QSearchBar
 * @property RegisteredUserDashboardVisualEmbeddingConfiguration|null $DashboardVisual
 * @property RegisteredUserGenerativeQnAEmbeddingConfiguration|null $GenerativeQnA
 * @property RegisteredUserQuickChatEmbeddingConfiguration|null $QuickChat
 */
class RegisteredUserEmbeddingExperienceConfiguration extends Shape
{
    /**
     * @param array{
     *     Dashboard?: RegisteredUserDashboardEmbeddingConfiguration|null,
     *     QuickSightConsole?: RegisteredUserQuickSightConsoleEmbeddingConfiguration|null,
     *     QSearchBar?: RegisteredUserQSearchBarEmbeddingConfiguration|null,
     *     DashboardVisual?: RegisteredUserDashboardVisualEmbeddingConfiguration|null,
     *     GenerativeQnA?: RegisteredUserGenerativeQnAEmbeddingConfiguration|null,
     *     QuickChat?: RegisteredUserQuickChatEmbeddingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
