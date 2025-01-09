<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatePersistenceConfigurations $StatePersistence
 * @property SharedViewConfigurations $SharedView
 * @property BookmarksConfigurations $Bookmarks
 */
class RegisteredUserDashboardFeatureConfigurations extends Shape
{
    /**
     * @param array{
     *     StatePersistence?: StatePersistenceConfigurations,
     *     SharedView?: SharedViewConfigurations,
     *     Bookmarks?: BookmarksConfigurations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
