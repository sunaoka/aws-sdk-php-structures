<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetHypervisorPropertyMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VmwareCategory
 * @property string $VmwareTagName
 * @property string $AwsTagKey
 * @property string $AwsTagValue
 */
class VmwareToAwsTagMapping extends Shape
{
    /**
     * @param array{
     *     VmwareCategory: string,
     *     VmwareTagName: string,
     *     AwsTagKey: string,
     *     AwsTagValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
