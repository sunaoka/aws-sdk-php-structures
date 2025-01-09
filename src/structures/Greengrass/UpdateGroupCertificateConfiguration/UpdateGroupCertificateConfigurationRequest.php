<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateGroupCertificateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateExpiryInMilliseconds
 * @property string $GroupId
 */
class UpdateGroupCertificateConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CertificateExpiryInMilliseconds?: string,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
