<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateExtensionAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionIdentifier
 * @property int|null $ExtensionVersionNumber
 * @property string $ResourceIdentifier
 * @property array<string, string>|null $Parameters
 * @property array<string, string>|null $Tags
 */
class CreateExtensionAssociationRequest extends Request
{
    /**
     * @param array{
     *     ExtensionIdentifier: string,
     *     ExtensionVersionNumber?: int|null,
     *     ResourceIdentifier: string,
     *     Parameters?: array<string, string>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
