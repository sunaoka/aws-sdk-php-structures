<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessmentReportUrl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hyperlinkName
 * @property string $link
 */
class URL extends Shape
{
    /**
     * @param array{
     *     hyperlinkName?: string,
     *     link?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
