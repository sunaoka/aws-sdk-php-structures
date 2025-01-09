<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComplaintSubType
 * @property string $ComplaintFeedbackType
 */
class Complaint extends Shape
{
    /**
     * @param array{
     *     ComplaintSubType?: string,
     *     ComplaintFeedbackType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
