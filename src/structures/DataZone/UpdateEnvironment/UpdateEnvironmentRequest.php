<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $glossaryTerms
 * @property string|null $blueprintVersion
 * @property list<Shapes\EnvironmentParameter>|null $userParameters
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     glossaryTerms?: list<string>|null,
     *     blueprintVersion?: string|null,
     *     userParameters?: list<Shapes\EnvironmentParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
