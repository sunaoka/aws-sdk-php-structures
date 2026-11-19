<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountDeliveryAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GLOBAL'|'REGIONAL' $SharedPoolDeliveryMode
 */
class PutAccountDeliveryAttributesRequest extends Request
{
    /**
     * @param array{SharedPoolDeliveryMode: 'GLOBAL'|'REGIONAL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
