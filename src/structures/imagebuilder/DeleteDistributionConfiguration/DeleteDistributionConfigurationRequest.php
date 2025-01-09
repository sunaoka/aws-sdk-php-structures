<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteDistributionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionConfigurationArn
 */
class DeleteDistributionConfigurationRequest extends Request
{
    /**
     * @param array{distributionConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
