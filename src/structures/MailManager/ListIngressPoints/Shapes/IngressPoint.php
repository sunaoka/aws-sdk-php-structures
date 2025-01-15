<?php

namespace Sunaoka\Aws\Structures\MailManager\ListIngressPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ARecord
 * @property string $IngressPointId
 * @property string $IngressPointName
 * @property 'PROVISIONING'|'DEPROVISIONING'|'UPDATING'|'ACTIVE'|'CLOSED'|'FAILED' $Status
 * @property 'OPEN'|'AUTH' $Type
 */
class IngressPoint extends Shape
{
    /**
     * @param array{
     *     ARecord?: string|null,
     *     IngressPointId: string,
     *     IngressPointName: string,
     *     Status: 'PROVISIONING'|'DEPROVISIONING'|'UPDATING'|'ACTIVE'|'CLOSED'|'FAILED',
     *     Type: 'OPEN'|'AUTH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
