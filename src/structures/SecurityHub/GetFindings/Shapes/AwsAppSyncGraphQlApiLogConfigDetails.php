<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudWatchLogsRoleArn
 * @property bool|null $ExcludeVerboseContent
 * @property string|null $FieldLogLevel
 */
class AwsAppSyncGraphQlApiLogConfigDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogsRoleArn?: string|null,
     *     ExcludeVerboseContent?: bool|null,
     *     FieldLogLevel?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
