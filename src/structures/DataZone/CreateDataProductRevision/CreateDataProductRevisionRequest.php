<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProductRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $domainIdentifier
 * @property list<Shapes\FormInput>|null $formsInput
 * @property list<string>|null $glossaryTerms
 * @property string $identifier
 * @property list<Shapes\DataProductItem>|null $items
 * @property string $name
 */
class CreateDataProductRevisionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     formsInput?: list<Shapes\FormInput>|null,
     *     glossaryTerms?: list<string>|null,
     *     identifier: string,
     *     items?: list<Shapes\DataProductItem>|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
