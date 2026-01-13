<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomainUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string $parentDomainUnitIdentifier
 * @property string|null $description
 * @property string|null $clientToken
 */
class CreateDomainUnitRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     parentDomainUnitIdentifier: string,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
