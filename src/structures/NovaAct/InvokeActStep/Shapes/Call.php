<?php

namespace Sunaoka\Aws\Structures\NovaAct\InvokeActStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $callId
 * @property SensitiveDocument $input
 * @property string $name
 */
class Call extends Shape
{
    /**
     * @param array{
     *     callId: string,
     *     input: SensitiveDocument,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
