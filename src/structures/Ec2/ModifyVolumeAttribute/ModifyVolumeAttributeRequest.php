<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVolumeAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue|null $AutoEnableIO
 * @property string $VolumeId
 * @property bool|null $DryRun
 */
class ModifyVolumeAttributeRequest extends Request
{
    /**
     * @param array{
     *     AutoEnableIO?: Shapes\AttributeBooleanValue|null,
     *     VolumeId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
