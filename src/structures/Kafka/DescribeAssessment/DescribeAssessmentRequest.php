<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssessmentArn
 * @property string $ClusterArn
 */
class DescribeAssessmentRequest extends Request
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
