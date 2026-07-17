<?php

namespace Sunaoka\Aws\Structures\Odb\GetOciOnboardingStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $iamRoleArn
 * @property 'KmsTde'|'SecretsManager'|null $awsIntegration
 * @property 'PROVISIONING'|'AVAILABLE'|'PROVISION_FAILED'|'TERMINATING'|'TERMINATE_FAILED'|null $status
 * @property string|null $statusReason
 */
class OciIamRole extends Shape
{
    /**
     * @param array{
     *     iamRoleArn?: string|null,
     *     awsIntegration?: 'KmsTde'|'SecretsManager'|null,
     *     status?: 'PROVISIONING'|'AVAILABLE'|'PROVISION_FAILED'|'TERMINATING'|'TERMINATE_FAILED'|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
