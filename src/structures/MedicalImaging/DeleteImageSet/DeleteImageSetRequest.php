<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\DeleteImageSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 */
class DeleteImageSetRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     imageSetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
