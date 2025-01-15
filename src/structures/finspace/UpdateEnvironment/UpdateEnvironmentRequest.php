<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string|null $name
 * @property string|null $description
 * @property 'FEDERATED'|'LOCAL'|null $federationMode
 * @property Shapes\FederationParameters|null $federationParameters
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     federationMode?: 'FEDERATED'|'LOCAL'|null,
     *     federationParameters?: Shapes\FederationParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
