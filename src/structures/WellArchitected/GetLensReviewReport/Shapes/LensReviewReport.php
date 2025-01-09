<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReviewReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LensAlias
 * @property string $LensArn
 * @property string $Base64String
 */
class LensReviewReport extends Shape
{
    /**
     * @param array{
     *     LensAlias?: string,
     *     LensArn?: string,
     *     Base64String?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
