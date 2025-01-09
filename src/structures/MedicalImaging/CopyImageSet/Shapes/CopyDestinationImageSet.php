<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CopyImageSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageSetId
 * @property string $latestVersionId
 */
class CopyDestinationImageSet extends Shape
{
    /**
     * @param array{
     *     imageSetId: string,
     *     latestVersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
