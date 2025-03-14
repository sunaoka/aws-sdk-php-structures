<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $blueprintVersion
 * @property string|null $description
 * @property string $domainIdentifier
 * @property list<string>|null $glossaryTerms
 * @property string $identifier
 * @property string|null $name
 * @property list<Shapes\EnvironmentParameter>|null $userParameters
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     blueprintVersion?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     glossaryTerms?: list<string>|null,
     *     identifier: string,
     *     name?: string|null,
     *     userParameters?: list<Shapes\EnvironmentParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
