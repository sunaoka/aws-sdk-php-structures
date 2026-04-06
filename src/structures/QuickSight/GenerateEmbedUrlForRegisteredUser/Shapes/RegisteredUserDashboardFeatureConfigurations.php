<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatePersistenceConfigurations|null $StatePersistence
 * @property SharedViewConfigurations|null $SharedView
 * @property BookmarksConfigurations|null $Bookmarks
 */
class RegisteredUserDashboardFeatureConfigurations extends Shape
{
    /**
     * @param array{
     *     StatePersistence?: StatePersistenceConfigurations|null,
     *     SharedView?: SharedViewConfigurations|null,
     *     Bookmarks?: BookmarksConfigurations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
