<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxInheritance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'OptIn'|'OptOut' $heritageStatus
 */
class PutTaxInheritanceRequest extends Request
{
    /**
     * @param array{heritageStatus?: 'OptIn'|'OptOut'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
