<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property string $userId
 * @property string $secretAccessKey
 * @property string $datakey
 */
class InforNexusConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     accessKeyId: string,
     *     userId: string,
     *     secretAccessKey: string,
     *     datakey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
