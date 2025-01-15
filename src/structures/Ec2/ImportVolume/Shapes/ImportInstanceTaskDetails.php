<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $InstanceId
 * @property 'Windows'|null $Platform
 * @property list<ImportInstanceVolumeDetailItem>|null $Volumes
 */
class ImportInstanceTaskDetails extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     InstanceId?: string|null,
     *     Platform?: 'Windows'|null,
     *     Volumes?: list<ImportInstanceVolumeDetailItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
