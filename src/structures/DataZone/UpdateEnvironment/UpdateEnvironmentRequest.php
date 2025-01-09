<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainIdentifier
 * @property list<string> $glossaryTerms
 * @property string $identifier
 * @property string $name
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainIdentifier: string,
     *     glossaryTerms?: list<string>,
     *     identifier: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
