<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Max
 * @property int|null $Min
 */
class AwsEc2LaunchTemplateDataInstanceRequirementsNetworkInterfaceCountDetails extends Shape
{
    /**
     * @param array{
     *     Max?: int|null,
     *     Min?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
