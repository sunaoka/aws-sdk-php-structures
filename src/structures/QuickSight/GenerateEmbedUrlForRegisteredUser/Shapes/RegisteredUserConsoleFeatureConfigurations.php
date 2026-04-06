<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatePersistenceConfigurations|null $StatePersistence
 */
class RegisteredUserConsoleFeatureConfigurations extends Shape
{
    /**
     * @param array{StatePersistence?: StatePersistenceConfigurations|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
