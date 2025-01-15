<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EncryptionDisabled
 * @property string|null $Location
 * @property string|null $Status
 */
class AwsCodeBuildProjectLogsConfigS3LogsDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionDisabled?: bool|null,
     *     Location?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
