<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $domainIdentifier
 * @property list<Shapes\FormInput>|null $formsInput
 * @property list<string>|null $glossaryTerms
 * @property list<Shapes\DataProductItem>|null $items
 * @property string $name
 * @property string $owningProjectIdentifier
 */
class CreateDataProductRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     formsInput?: list<Shapes\FormInput>|null,
     *     glossaryTerms?: list<string>|null,
     *     items?: list<Shapes\DataProductItem>|null,
     *     name: string,
     *     owningProjectIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
