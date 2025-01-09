<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StatusType
 * @property bool $Normal
 * @property string $Status
 * @property string $Message
 */
class AwsRdsDbStatusInfo extends Shape
{
    /**
     * @param array{
     *     StatusType?: string,
     *     Normal?: bool,
     *     Status?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
