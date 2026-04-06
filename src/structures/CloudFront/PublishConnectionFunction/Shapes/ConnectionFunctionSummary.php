<?php

namespace Sunaoka\Aws\Structures\CloudFront\PublishConnectionFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property FunctionConfig $ConnectionFunctionConfig
 * @property string $ConnectionFunctionArn
 * @property string $Status
 * @property 'DEVELOPMENT'|'LIVE' $Stage
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ConnectionFunctionSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     ConnectionFunctionConfig: FunctionConfig,
     *     ConnectionFunctionArn: string,
     *     Status: string,
     *     Stage: 'DEVELOPMENT'|'LIVE',
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
