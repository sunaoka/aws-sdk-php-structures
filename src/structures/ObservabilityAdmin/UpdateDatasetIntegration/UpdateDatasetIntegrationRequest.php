<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateDatasetIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $RoleArn
 */
class UpdateDatasetIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
