<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateDirectoryRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DirectoryId
 * @property array<string, string>|null $Tags
 */
class CreateDirectoryRegistrationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DirectoryId: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
