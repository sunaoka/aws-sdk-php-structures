<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetDirectoryRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryRegistrationArn
 */
class GetDirectoryRegistrationRequest extends Request
{
    /**
     * @param array{DirectoryRegistrationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
