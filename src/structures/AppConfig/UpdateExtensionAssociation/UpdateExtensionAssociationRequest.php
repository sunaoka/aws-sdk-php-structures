<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExtensionAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionAssociationId
 * @property array<string, string> $Parameters
 */
class UpdateExtensionAssociationRequest extends Request
{
    /**
     * @param array{
     *     ExtensionAssociationId: string,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
