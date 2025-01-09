<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Target
 * @property int $TimeoutSeconds
 * @property string $SourceFileLocation
 */
class CustomStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Target?: string,
     *     TimeoutSeconds?: int,
     *     SourceFileLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
