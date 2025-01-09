<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteExplainabilityExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplainabilityExportArn
 */
class DeleteExplainabilityExportRequest extends Request
{
    /**
     * @param array{ExplainabilityExportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
