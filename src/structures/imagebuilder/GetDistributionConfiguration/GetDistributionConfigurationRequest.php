<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetDistributionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionConfigurationArn
 */
class GetDistributionConfigurationRequest extends Request
{
    /**
     * @param array{distributionConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
