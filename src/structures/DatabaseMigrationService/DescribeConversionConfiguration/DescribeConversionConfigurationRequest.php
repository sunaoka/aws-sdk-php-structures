<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeConversionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 */
class DescribeConversionConfigurationRequest extends Request
{
    /**
     * @param array{MigrationProjectIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
