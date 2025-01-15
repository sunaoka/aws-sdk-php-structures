<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplicationRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RevisionLocation|null $revisionLocation
 * @property GenericRevisionInfo|null $genericRevisionInfo
 */
class RevisionInfo extends Shape
{
    /**
     * @param array{
     *     revisionLocation?: RevisionLocation|null,
     *     genericRevisionInfo?: GenericRevisionInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
