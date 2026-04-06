<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property list<string>|null $glossaryTerms
 * @property string $name
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     glossaryTerms?: list<string>|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
