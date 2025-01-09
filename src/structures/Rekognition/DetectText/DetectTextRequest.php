<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Image $Image
 * @property Shapes\DetectTextFilters $Filters
 */
class DetectTextRequest extends Request
{
    /**
     * @param array{
     *     Image: Shapes\Image,
     *     Filters?: Shapes\DetectTextFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
