<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateS3TableIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Encryption $Encryption
 * @property string $RoleArn
 * @property array<string, string>|null $Tags
 */
class CreateS3TableIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Encryption: Shapes\Encryption,
     *     RoleArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
