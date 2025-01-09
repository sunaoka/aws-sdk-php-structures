<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateDirectoryRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $DirectoryId
 * @property array<string, string> $Tags
 */
class CreateDirectoryRegistrationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DirectoryId: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
