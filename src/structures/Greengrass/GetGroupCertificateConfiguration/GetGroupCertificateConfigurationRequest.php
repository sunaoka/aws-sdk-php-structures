<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetGroupCertificateConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 */
class GetGroupCertificateConfigurationRequest extends Request
{
    /**
     * @param array{GroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
