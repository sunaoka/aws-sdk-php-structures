<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Image
 * @property string|null $ImageUid
 */
class ContainerFindingResource extends Shape
{
    /**
     * @param array{
     *     Image: string,
     *     ImageUid?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
