<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExtension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionIdentifier
 * @property int|null $VersionNumber
 */
class GetExtensionRequest extends Request
{
    /**
     * @param array{
     *     ExtensionIdentifier: string,
     *     VersionNumber?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
