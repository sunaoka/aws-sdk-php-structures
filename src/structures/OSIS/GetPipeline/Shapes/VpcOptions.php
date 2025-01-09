<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property VpcAttachmentOptions $VpcAttachmentOptions
 * @property 'CUSTOMER'|'SERVICE' $VpcEndpointManagement
 */
class VpcOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     VpcAttachmentOptions?: VpcAttachmentOptions,
     *     VpcEndpointManagement?: 'CUSTOMER'|'SERVICE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
