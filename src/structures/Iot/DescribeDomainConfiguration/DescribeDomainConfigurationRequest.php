<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainConfigurationName
 */
class DescribeDomainConfigurationRequest extends Request
{
    /**
     * @param array{domainConfigurationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
