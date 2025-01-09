<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int $Revision
 */
class ConfigurationId extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Revision?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
