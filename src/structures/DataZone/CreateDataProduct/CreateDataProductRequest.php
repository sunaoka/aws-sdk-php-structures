<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string $owningProjectIdentifier
 * @property string|null $description
 * @property list<string>|null $glossaryTerms
 * @property list<Shapes\FormInput>|null $formsInput
 * @property list<Shapes\DataProductItem>|null $items
 * @property string|null $clientToken
 */
class CreateDataProductRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     owningProjectIdentifier: string,
     *     description?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     formsInput?: list<Shapes\FormInput>|null,
     *     items?: list<Shapes\DataProductItem>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
