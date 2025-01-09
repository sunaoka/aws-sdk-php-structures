<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\UpdateAccountConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EncryptionConfig $encryptionConfig
 */
class UpdateAccountConfigurationRequest extends Request
{
    /**
     * @param array{encryptionConfig: Shapes\EncryptionConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
