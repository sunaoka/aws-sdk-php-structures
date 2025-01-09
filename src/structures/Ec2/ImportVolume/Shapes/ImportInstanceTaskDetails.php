<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $InstanceId
 * @property 'Windows' $Platform
 * @property list<ImportInstanceVolumeDetailItem> $Volumes
 */
class ImportInstanceTaskDetails extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     InstanceId?: string,
     *     Platform?: 'Windows',
     *     Volumes?: list<ImportInstanceVolumeDetailItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
