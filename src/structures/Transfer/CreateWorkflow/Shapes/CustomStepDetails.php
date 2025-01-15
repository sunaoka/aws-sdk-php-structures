<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Target
 * @property int<1, 1800>|null $TimeoutSeconds
 * @property string|null $SourceFileLocation
 */
class CustomStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Target?: string|null,
     *     TimeoutSeconds?: int<1, 1800>|null,
     *     SourceFileLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
