<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComplaintSubType
 * @property string|null $ComplaintFeedbackType
 */
class Complaint extends Shape
{
    /**
     * @param array{
     *     ComplaintSubType?: string|null,
     *     ComplaintFeedbackType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
