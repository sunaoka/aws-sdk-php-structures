<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainIdentifier
 * @property string $name
 * @property string $owningProjectIdentifier
 * @property 'DISABLED'|'ENABLED' $status
 */
class CreateGlossaryRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     name: string,
     *     owningProjectIdentifier: string,
     *     status?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
