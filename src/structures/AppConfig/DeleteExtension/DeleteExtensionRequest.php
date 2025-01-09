<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionIdentifier
 * @property int $VersionNumber
 */
class DeleteExtensionRequest extends Request
{
    /**
     * @param array{
     *     ExtensionIdentifier: string,
     *     VersionNumber?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
