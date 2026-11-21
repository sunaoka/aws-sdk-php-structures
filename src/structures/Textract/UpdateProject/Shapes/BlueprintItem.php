<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BlueprintArn
 * @property string|null $BlueprintVersion
 */
class BlueprintItem extends Shape
{
    /**
     * @param array{
     *     BlueprintArn: string,
     *     BlueprintVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
