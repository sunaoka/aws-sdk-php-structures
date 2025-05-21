<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSourceDetails|null $imageSourceDetails
 * @property AudioSourceDetails|null $audioSourceDetails
 * @property VideoSourceDetails|null $videoSourceDetails
 */
class SourceDetails extends Shape
{
    /**
     * @param array{
     *     imageSourceDetails?: ImageSourceDetails|null,
     *     audioSourceDetails?: AudioSourceDetails|null,
     *     videoSourceDetails?: VideoSourceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
