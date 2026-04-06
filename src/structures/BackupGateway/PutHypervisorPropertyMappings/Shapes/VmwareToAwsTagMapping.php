<?php

namespace Sunaoka\Aws\Structures\BackupGateway\PutHypervisorPropertyMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsTagKey
 * @property string $AwsTagValue
 * @property string $VmwareCategory
 * @property string $VmwareTagName
 */
class VmwareToAwsTagMapping extends Shape
{
    /**
     * @param array{
     *     AwsTagKey: string,
     *     AwsTagValue: string,
     *     VmwareCategory: string,
     *     VmwareTagName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
