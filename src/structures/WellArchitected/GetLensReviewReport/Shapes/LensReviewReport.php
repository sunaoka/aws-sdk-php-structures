<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReviewReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property string|null $Base64String
 */
class LensReviewReport extends Shape
{
    /**
     * @param array{
     *     LensAlias?: string|null,
     *     LensArn?: string|null,
     *     Base64String?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
