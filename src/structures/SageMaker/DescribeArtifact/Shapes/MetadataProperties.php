<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommitId
 * @property string $Repository
 * @property string $GeneratedBy
 * @property string $ProjectId
 */
class MetadataProperties extends Shape
{
    /**
     * @param array{
     *     CommitId?: string,
     *     Repository?: string,
     *     GeneratedBy?: string,
     *     ProjectId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
