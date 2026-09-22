<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateDatasetIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property array<string, string>|null $Tags
 */
class CreateDatasetIntegrationRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
