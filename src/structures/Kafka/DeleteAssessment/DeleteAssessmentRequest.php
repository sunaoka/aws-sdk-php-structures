<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssessmentArn
 * @property string $ClusterArn
 */
class DeleteAssessmentRequest extends Request
{
    /**
     * @param array{
     *     AssessmentArn: string,
     *     ClusterArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
