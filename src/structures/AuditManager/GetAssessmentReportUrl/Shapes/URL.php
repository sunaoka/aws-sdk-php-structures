<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessmentReportUrl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hyperlinkName
 * @property string|null $link
 */
class URL extends Shape
{
    /**
     * @param array{
     *     hyperlinkName?: string|null,
     *     link?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
