<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<S3Tag>|null $Tags
 * @property string|null $SourceFileLocation
 */
class TagStepDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Tags?: list<S3Tag>|null,
     *     SourceFileLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
