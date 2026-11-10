<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteDataQualityEvaluationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteDataQualityEvaluationConfigRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
