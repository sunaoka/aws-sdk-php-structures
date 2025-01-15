<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property bool|null $NoReboot
 * @property list<Shapes\BlockDeviceMapping>|null $BlockDeviceMappings
 */
class CreateImageRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     NoReboot?: bool|null,
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
