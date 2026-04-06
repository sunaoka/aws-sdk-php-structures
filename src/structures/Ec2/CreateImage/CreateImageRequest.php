<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BlockDeviceMapping>|null $BlockDeviceMappings
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property string $Name
 * @property bool|null $NoReboot
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateImageRequest extends Request
{
    /**
     * @param array{
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>|null,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     Name: string,
     *     NoReboot?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
