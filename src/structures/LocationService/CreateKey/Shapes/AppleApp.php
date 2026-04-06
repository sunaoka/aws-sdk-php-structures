<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BundleId
 */
class AppleApp extends Shape
{
    /**
     * @param array{BundleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
