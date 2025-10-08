<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $customDataIdentifiers
 */
class CustomEntityConfig extends Shape
{
    /**
     * @param array{customDataIdentifiers: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
