<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainExecutionRole
 * @property string $identifier
 * @property string $name
 * @property string $serviceRole
 * @property Shapes\SingleSignOn $singleSignOn
 */
class UpdateDomainRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainExecutionRole?: string,
     *     identifier: string,
     *     name?: string,
     *     serviceRole?: string,
     *     singleSignOn?: Shapes\SingleSignOn
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
