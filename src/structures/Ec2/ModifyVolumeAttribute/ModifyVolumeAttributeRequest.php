<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVolumeAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AttributeBooleanValue $AutoEnableIO
 * @property string $VolumeId
 * @property bool $DryRun
 */
class ModifyVolumeAttributeRequest extends Request
{
    /**
     * @param array{
     *     AutoEnableIO?: Shapes\AttributeBooleanValue,
     *     VolumeId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
