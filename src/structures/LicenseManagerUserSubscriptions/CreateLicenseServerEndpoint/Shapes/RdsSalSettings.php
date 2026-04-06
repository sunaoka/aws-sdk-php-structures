<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\CreateLicenseServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CredentialsProvider $RdsSalCredentialsProvider
 */
class RdsSalSettings extends Shape
{
    /**
     * @param array{RdsSalCredentialsProvider: CredentialsProvider} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
