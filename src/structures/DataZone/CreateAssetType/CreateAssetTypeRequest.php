<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string|null $description
 * @property array<string, Shapes\FormEntryInput> $formsInput
 * @property string $owningProjectIdentifier
 */
class CreateAssetTypeRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     formsInput: array<string, Shapes\FormEntryInput>,
     *     owningProjectIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
