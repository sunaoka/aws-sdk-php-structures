<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatePersistenceConfigurations $StatePersistence
 * @property SharedViewConfigurations $SharedView
 */
class RegisteredUserConsoleFeatureConfigurations extends Shape
{
    /**
     * @param array{
     *     StatePersistence?: StatePersistenceConfigurations,
     *     SharedView?: SharedViewConfigurations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
