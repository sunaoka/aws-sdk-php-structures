<?php

namespace Sunaoka\Aws\Structures\SsmSap\RegisterApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS' $ComponentType
 * @property string $Sid
 * @property string $Ec2InstanceId
 */
class ComponentInfo extends Shape
{
    /**
     * @param array{
     *     ComponentType: 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS',
     *     Sid: string,
     *     Ec2InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
