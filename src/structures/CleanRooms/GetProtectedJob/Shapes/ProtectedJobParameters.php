<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $analysisTemplateArn
 * @property array<string, string>|null $parameters
 */
class ProtectedJobParameters extends Shape
{
    /**
     * @param array{
     *     analysisTemplateArn: string,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
