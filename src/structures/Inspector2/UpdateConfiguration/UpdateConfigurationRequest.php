<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Ec2Configuration $ec2Configuration
 * @property Shapes\EcrConfiguration $ecrConfiguration
 */
class UpdateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ec2Configuration?: Shapes\Ec2Configuration,
     *     ecrConfiguration?: Shapes\EcrConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
