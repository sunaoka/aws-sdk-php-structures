<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteDatasetIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteDatasetIntegrationRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
