<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string|null $domainExecutionRole
 * @property string $identifier
 * @property string|null $name
 * @property string|null $serviceRole
 * @property Shapes\SingleSignOn|null $singleSignOn
 */
class UpdateDomainRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainExecutionRole?: string|null,
     *     identifier: string,
     *     name?: string|null,
     *     serviceRole?: string|null,
     *     singleSignOn?: Shapes\SingleSignOn|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
