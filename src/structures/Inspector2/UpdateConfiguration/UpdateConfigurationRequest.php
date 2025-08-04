<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EcrConfiguration|null $ecrConfiguration
 * @property Shapes\Ec2Configuration|null $ec2Configuration
 */
class UpdateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ecrConfiguration?: Shapes\EcrConfiguration|null,
     *     ec2Configuration?: Shapes\Ec2Configuration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
