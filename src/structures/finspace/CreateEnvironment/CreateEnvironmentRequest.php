<?php

namespace Sunaoka\Aws\Structures\finspace\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $kmsKeyId
 * @property array<string, string> $tags
 * @property 'FEDERATED'|'LOCAL' $federationMode
 * @property Shapes\FederationParameters $federationParameters
 * @property Shapes\SuperuserParameters $superuserParameters
 * @property list<string> $dataBundles
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     kmsKeyId?: string,
     *     tags?: array<string, string>,
     *     federationMode?: 'FEDERATED'|'LOCAL',
     *     federationParameters?: Shapes\FederationParameters,
     *     superuserParameters?: Shapes\SuperuserParameters,
     *     dataBundles?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
