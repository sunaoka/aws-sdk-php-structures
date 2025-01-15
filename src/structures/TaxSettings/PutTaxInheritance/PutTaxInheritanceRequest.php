<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxInheritance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'OptIn'|'OptOut'|null $heritageStatus
 */
class PutTaxInheritanceRequest extends Request
{
    /**
     * @param array{heritageStatus?: 'OptIn'|'OptOut'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
