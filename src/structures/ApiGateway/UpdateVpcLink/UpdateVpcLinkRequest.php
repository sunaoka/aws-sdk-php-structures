<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vpcLinkId
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateVpcLinkRequest extends Request
{
    /**
     * @param array{
     *     vpcLinkId: string,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
