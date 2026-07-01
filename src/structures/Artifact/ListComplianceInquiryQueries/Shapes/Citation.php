<?php

namespace Sunaoka\Aws\Structures\Artifact\ListComplianceInquiryQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceLabel
 * @property string|null $sourceContent
 * @property string|null $sourceLink
 */
class Citation extends Shape
{
    /**
     * @param array{
     *     sourceLabel?: string|null,
     *     sourceContent?: string|null,
     *     sourceLink?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
