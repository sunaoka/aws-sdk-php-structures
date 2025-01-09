<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteExplainability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplainabilityArn
 */
class DeleteExplainabilityRequest extends Request
{
    /**
     * @param array{ExplainabilityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
