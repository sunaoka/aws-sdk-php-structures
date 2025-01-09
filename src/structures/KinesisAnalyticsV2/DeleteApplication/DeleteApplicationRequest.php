<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     CreateTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
