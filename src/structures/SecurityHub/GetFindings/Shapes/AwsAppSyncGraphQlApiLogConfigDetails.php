<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLogsRoleArn
 * @property bool $ExcludeVerboseContent
 * @property string $FieldLogLevel
 */
class AwsAppSyncGraphQlApiLogConfigDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsRoleArn?: string,
     *     ExcludeVerboseContent?: bool,
     *     FieldLogLevel?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
