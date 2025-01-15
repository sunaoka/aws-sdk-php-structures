<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property VpcAttachmentOptions|null $VpcAttachmentOptions
 * @property 'CUSTOMER'|'SERVICE'|null $VpcEndpointManagement
 */
class VpcOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>|null,
     *     VpcAttachmentOptions?: VpcAttachmentOptions|null,
     *     VpcEndpointManagement?: 'CUSTOMER'|'SERVICE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
