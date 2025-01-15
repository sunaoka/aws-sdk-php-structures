<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property 'DISABLED'|'ENABLED'|null $status
 */
class UpdateGlossaryRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     status?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
