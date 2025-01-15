<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property list<string>|null $glossaryTerms
 * @property string $identifier
 * @property string|null $name
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     glossaryTerms?: list<string>|null,
     *     identifier: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
