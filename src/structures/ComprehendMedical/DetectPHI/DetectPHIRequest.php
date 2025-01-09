<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectPHI;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 */
class DetectPHIRequest extends Request
{
    /**
     * @param array{Text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
