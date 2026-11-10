<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityEvaluationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetDataQualityEvaluationConfigRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
