<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomainUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainIdentifier
 * @property string $name
 * @property string $parentDomainUnitIdentifier
 */
class CreateDomainUnitRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     name: string,
     *     parentDomainUnitIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
