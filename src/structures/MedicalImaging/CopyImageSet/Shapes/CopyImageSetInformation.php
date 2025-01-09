<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CopyImageSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CopySourceImageSetInformation $sourceImageSet
 * @property CopyDestinationImageSet $destinationImageSet
 */
class CopyImageSetInformation extends Shape
{
    /**
     * @param array{
     *     sourceImageSet: CopySourceImageSetInformation,
     *     destinationImageSet?: CopyDestinationImageSet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
