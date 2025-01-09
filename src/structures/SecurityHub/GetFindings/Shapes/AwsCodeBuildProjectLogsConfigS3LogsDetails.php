<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EncryptionDisabled
 * @property string $Location
 * @property string $Status
 */
class AwsCodeBuildProjectLogsConfigS3LogsDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionDisabled?: bool,
     *     Location?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
