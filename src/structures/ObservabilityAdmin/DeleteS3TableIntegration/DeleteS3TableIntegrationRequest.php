<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteS3TableIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteS3TableIntegrationRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
