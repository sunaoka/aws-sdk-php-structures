<?php

namespace Sunaoka\Aws\Structures\finspace\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property 'FEDERATED'|'LOCAL'|null $federationMode
 * @property Shapes\FederationParameters|null $federationParameters
 * @property Shapes\SuperuserParameters|null $superuserParameters
 * @property list<string>|null $dataBundles
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     federationMode?: 'FEDERATED'|'LOCAL'|null,
     *     federationParameters?: Shapes\FederationParameters|null,
     *     superuserParameters?: Shapes\SuperuserParameters|null,
     *     dataBundles?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
