<?php

namespace Sunaoka\Aws\Structures\Ssm\AssociateOpsItemRelatedItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsItemId
 * @property string $AssociationType
 * @property string $ResourceType
 * @property string $ResourceUri
 */
class AssociateOpsItemRelatedItemRequest extends Request
{
    /**
     * @param array{
     *     OpsItemId: string,
     *     AssociationType: string,
     *     ResourceType: string,
     *     ResourceUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
