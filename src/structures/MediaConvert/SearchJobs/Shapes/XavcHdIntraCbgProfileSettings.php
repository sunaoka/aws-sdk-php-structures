<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null $InterlaceMode
 * @property 'CLASS_50'|'CLASS_100'|'CLASS_200'|null $XavcClass
 */
class XavcHdIntraCbgProfileSettings extends Shape
{
    /**
     * @param array{
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD'|null,
     *     XavcClass?: 'CLASS_50'|'CLASS_100'|'CLASS_200'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
