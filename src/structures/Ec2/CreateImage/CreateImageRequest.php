<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property bool $NoReboot
 * @property list<Shapes\BlockDeviceMapping> $BlockDeviceMappings
 */
class CreateImageRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string,
     *     NoReboot?: bool,
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
