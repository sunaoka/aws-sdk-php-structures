<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DescribePackagingConfigurationRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
