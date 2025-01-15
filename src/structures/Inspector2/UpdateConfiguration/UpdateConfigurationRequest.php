<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Ec2Configuration|null $ec2Configuration
 * @property Shapes\EcrConfiguration|null $ecrConfiguration
 */
class UpdateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ec2Configuration?: Shapes\Ec2Configuration|null,
     *     ecrConfiguration?: Shapes\EcrConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
