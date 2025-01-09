<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateExtensionAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionIdentifier
 * @property int $ExtensionVersionNumber
 * @property string $ResourceIdentifier
 * @property array<string, string> $Parameters
 * @property array<string, string> $Tags
 */
class CreateExtensionAssociationRequest extends Request
{
    /**
     * @param array{
     *     ExtensionIdentifier: string,
     *     ExtensionVersionNumber?: int,
     *     ResourceIdentifier: string,
     *     Parameters?: array<string, string>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
