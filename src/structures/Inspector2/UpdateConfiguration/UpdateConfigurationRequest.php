<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountId
 * @property Shapes\EcrConfiguration|null $ecrConfiguration
 * @property Shapes\Ec2Configuration|null $ec2Configuration
 * @property Shapes\UpdateConfigurationInheritance|null $updateConfigurationInheritance
 */
class UpdateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     ecrConfiguration?: Shapes\EcrConfiguration|null,
     *     ec2Configuration?: Shapes\Ec2Configuration|null,
     *     updateConfigurationInheritance?: Shapes\UpdateConfigurationInheritance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
