<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $name
 * @property string $description
 * @property 'FEDERATED'|'LOCAL' $federationMode
 * @property Shapes\FederationParameters $federationParameters
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     name?: string,
     *     description?: string,
     *     federationMode?: 'FEDERATED'|'LOCAL',
     *     federationParameters?: Shapes\FederationParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
