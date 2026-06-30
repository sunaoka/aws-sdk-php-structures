<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configuredTableAssociationId
 */
class ConfiguredTableAssociationSchemaTypeProperties extends Shape
{
    /**
     * @param array{configuredTableAssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
