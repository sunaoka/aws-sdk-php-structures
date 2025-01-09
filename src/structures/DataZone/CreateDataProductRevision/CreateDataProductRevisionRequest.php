<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProductRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainIdentifier
 * @property list<Shapes\FormInput> $formsInput
 * @property list<string> $glossaryTerms
 * @property string $identifier
 * @property list<Shapes\DataProductItem> $items
 * @property string $name
 */
class CreateDataProductRevisionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     formsInput?: list<Shapes\FormInput>,
     *     glossaryTerms?: list<string>,
     *     identifier: string,
     *     items?: list<Shapes\DataProductItem>,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
