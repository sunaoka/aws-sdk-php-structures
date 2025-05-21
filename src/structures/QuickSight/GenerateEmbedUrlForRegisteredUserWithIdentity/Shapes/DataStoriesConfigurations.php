<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class DataStoriesConfigurations extends Shape
{
    /**
     * @param array{Enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
