<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 */
class InferSNOMEDCTRequest extends Request
{
    /**
     * @param array{Text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
