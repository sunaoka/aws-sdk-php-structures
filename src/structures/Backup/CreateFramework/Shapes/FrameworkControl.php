<?php

namespace Sunaoka\Aws\Structures\Backup\CreateFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlName
 * @property list<ControlInputParameter> $ControlInputParameters
 * @property ControlScope $ControlScope
 */
class FrameworkControl extends Shape
{
    /**
     * @param array{
     *     ControlName: string,
     *     ControlInputParameters?: list<ControlInputParameter>,
     *     ControlScope?: ControlScope
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
