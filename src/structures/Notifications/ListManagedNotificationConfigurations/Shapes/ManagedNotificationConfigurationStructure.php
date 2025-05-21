<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 */
class ManagedNotificationConfigurationStructure extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
