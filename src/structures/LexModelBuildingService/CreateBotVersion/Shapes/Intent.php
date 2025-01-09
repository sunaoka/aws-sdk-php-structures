<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateBotVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property string $intentVersion
 */
class Intent extends Shape
{
    /**
     * @param array{
     *     intentName: string,
     *     intentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
