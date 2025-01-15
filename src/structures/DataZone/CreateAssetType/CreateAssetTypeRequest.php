<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property array<string, Shapes\FormEntryInput> $formsInput
 * @property string $name
 * @property string $owningProjectIdentifier
 */
class CreateAssetTypeRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     formsInput: array<string, Shapes\FormEntryInput>,
     *     name: string,
     *     owningProjectIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
