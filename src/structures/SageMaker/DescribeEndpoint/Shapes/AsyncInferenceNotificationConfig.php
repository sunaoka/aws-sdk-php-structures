<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SuccessTopic
 * @property string $ErrorTopic
 * @property list<'SUCCESS_NOTIFICATION_TOPIC'|'ERROR_NOTIFICATION_TOPIC'> $IncludeInferenceResponseIn
 */
class AsyncInferenceNotificationConfig extends Shape
{
    /**
     * @param array{
     *     SuccessTopic?: string,
     *     ErrorTopic?: string,
     *     IncludeInferenceResponseIn?: list<'SUCCESS_NOTIFICATION_TOPIC'|'ERROR_NOTIFICATION_TOPIC'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
