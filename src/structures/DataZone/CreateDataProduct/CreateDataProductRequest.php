<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainIdentifier
 * @property list<Shapes\FormInput> $formsInput
 * @property list<string> $glossaryTerms
 * @property list<Shapes\DataProductItem> $items
 * @property string $name
 * @property string $owningProjectIdentifier
 */
class CreateDataProductRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     formsInput?: list<Shapes\FormInput>,
     *     glossaryTerms?: list<string>,
     *     items?: list<Shapes\DataProductItem>,
     *     name: string,
     *     owningProjectIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
