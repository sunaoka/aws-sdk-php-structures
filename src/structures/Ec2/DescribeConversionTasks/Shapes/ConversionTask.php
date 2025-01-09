<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConversionTaskId
 * @property string $ExpirationTime
 * @property ImportInstanceTaskDetails $ImportInstance
 * @property ImportVolumeTaskDetails $ImportVolume
 * @property 'active'|'cancelling'|'cancelled'|'completed' $State
 * @property string $StatusMessage
 * @property list<Tag> $Tags
 */
class ConversionTask extends Shape
{
    /**
     * @param array{
     *     ConversionTaskId?: string,
     *     ExpirationTime?: string,
     *     ImportInstance?: ImportInstanceTaskDetails,
     *     ImportVolume?: ImportVolumeTaskDetails,
     *     State?: 'active'|'cancelling'|'cancelled'|'completed',
     *     StatusMessage?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
