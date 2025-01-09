<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<S3Tag> $Tags
 * @property string $SourceFileLocation
 */
class TagStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Tags?: list<S3Tag>,
     *     SourceFileLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
