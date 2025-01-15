<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConversionTaskId
 * @property string|null $ExpirationTime
 * @property ImportInstanceTaskDetails|null $ImportInstance
 * @property ImportVolumeTaskDetails|null $ImportVolume
 * @property 'active'|'cancelling'|'cancelled'|'completed'|null $State
 * @property string|null $StatusMessage
 * @property list<Tag>|null $Tags
 */
class ConversionTask extends Shape
{
    /**
     * @param array{
     *     ConversionTaskId?: string|null,
     *     ExpirationTime?: string|null,
     *     ImportInstance?: ImportInstanceTaskDetails|null,
     *     ImportVolume?: ImportVolumeTaskDetails|null,
     *     State?: 'active'|'cancelling'|'cancelled'|'completed'|null,
     *     StatusMessage?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
