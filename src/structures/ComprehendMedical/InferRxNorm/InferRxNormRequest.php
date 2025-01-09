<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 */
class InferRxNormRequest extends Request
{
    /**
     * @param array{Text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
