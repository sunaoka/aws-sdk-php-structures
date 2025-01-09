<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Male'|'Female'|'Nonbinary'|'Unlisted' $Type
 */
class KnownGender extends Shape
{
    /**
     * @param array{Type?: 'Male'|'Female'|'Nonbinary'|'Unlisted'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
