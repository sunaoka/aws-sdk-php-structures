<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SuccessTopic
 * @property string|null $ErrorTopic
 * @property list<'SUCCESS_NOTIFICATION_TOPIC'|'ERROR_NOTIFICATION_TOPIC'>|null $IncludeInferenceResponseIn
 */
class AsyncInferenceNotificationConfig extends Shape
{
    /**
     * @param array{
     *     SuccessTopic?: string|null,
     *     ErrorTopic?: string|null,
     *     IncludeInferenceResponseIn?: list<'SUCCESS_NOTIFICATION_TOPIC'|'ERROR_NOTIFICATION_TOPIC'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
