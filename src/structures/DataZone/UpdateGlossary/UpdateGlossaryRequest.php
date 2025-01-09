<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $name
 * @property 'DISABLED'|'ENABLED' $status
 */
class UpdateGlossaryRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string,
     *     status?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
