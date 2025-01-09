<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferICD10CM;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 */
class InferICD10CMRequest extends Request
{
    /**
     * @param array{Text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
