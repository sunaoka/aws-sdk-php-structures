<?php

namespace Sunaoka\Aws\Structures\Amplify\ListWebhooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $webhookArn
 * @property string $webhookId
 * @property string $webhookUrl
 * @property string $branchName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class Webhook extends Shape
{
    /**
     * @param array{
     *     webhookArn: string,
     *     webhookId: string,
     *     webhookUrl: string,
     *     branchName: string,
     *     description: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
