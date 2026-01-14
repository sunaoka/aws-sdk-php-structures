<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $description
 * @property Shapes\SingleSignOn|null $singleSignOn
 * @property string|null $domainExecutionRole
 * @property string|null $serviceRole
 * @property string|null $name
 * @property string|null $clientToken
 */
class UpdateDomainRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     description?: string|null,
     *     singleSignOn?: Shapes\SingleSignOn|null,
     *     domainExecutionRole?: string|null,
     *     serviceRole?: string|null,
     *     name?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
