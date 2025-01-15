<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CommitId
 * @property string|null $Repository
 * @property string|null $GeneratedBy
 * @property string|null $ProjectId
 */
class MetadataProperties extends Shape
{
    /**
     * @param array{
     *     CommitId?: string|null,
     *     Repository?: string|null,
     *     GeneratedBy?: string|null,
     *     ProjectId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
