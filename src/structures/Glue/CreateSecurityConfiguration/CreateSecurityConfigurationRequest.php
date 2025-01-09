<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 */
class CreateSecurityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EncryptionConfiguration: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
