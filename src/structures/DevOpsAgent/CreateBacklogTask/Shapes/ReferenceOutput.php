<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateBacklogTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $system
 * @property string|null $title
 * @property string $referenceId
 * @property string $referenceUrl
 * @property string $associationId
 */
class ReferenceOutput extends Shape
{
    /**
     * @param array{
     *     system: string,
     *     title?: string|null,
     *     referenceId: string,
     *     referenceUrl: string,
     *     associationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
