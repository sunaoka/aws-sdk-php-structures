<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string $owningProjectIdentifier
 * @property string|null $description
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 * @property string|null $clientToken
 */
class CreateGlossaryRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     owningProjectIdentifier: string,
     *     description?: string|null,
     *     status?: 'DISABLED'|'ENABLED'|null,
     *     usageRestrictions?: list<'ASSET_GOVERNED_TERMS'>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
