<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountVdmAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\VdmAttributes $VdmAttributes
 */
class PutAccountVdmAttributesRequest extends Request
{
    /**
     * @param array{VdmAttributes: Shapes\VdmAttributes} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
