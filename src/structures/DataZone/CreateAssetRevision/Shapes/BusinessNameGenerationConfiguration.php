<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetRevision\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 */
class BusinessNameGenerationConfiguration extends Shape
{
    /**
     * @param array{enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
