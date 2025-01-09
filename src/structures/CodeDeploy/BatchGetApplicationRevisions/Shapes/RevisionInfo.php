<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplicationRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RevisionLocation $revisionLocation
 * @property GenericRevisionInfo $genericRevisionInfo
 */
class RevisionInfo extends Shape
{
    /**
     * @param array{
     *     revisionLocation?: RevisionLocation,
     *     genericRevisionInfo?: GenericRevisionInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
