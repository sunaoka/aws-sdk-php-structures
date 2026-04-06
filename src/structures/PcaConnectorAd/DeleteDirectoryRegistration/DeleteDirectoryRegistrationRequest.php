<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteDirectoryRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryRegistrationArn
 */
class DeleteDirectoryRegistrationRequest extends Request
{
    /**
     * @param array{DirectoryRegistrationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
