<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyConversionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $ConversionConfiguration
 */
class ModifyConversionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     ConversionConfiguration: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
