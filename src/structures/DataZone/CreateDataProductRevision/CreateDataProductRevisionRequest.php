<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProductRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $name
 * @property string|null $description
 * @property list<string>|null $glossaryTerms
 * @property list<Shapes\DataProductItem>|null $items
 * @property list<Shapes\FormInput>|null $formsInput
 * @property string|null $clientToken
 */
class CreateDataProductRevisionRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     name: string,
     *     description?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     items?: list<Shapes\DataProductItem>|null,
     *     formsInput?: list<Shapes\FormInput>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
