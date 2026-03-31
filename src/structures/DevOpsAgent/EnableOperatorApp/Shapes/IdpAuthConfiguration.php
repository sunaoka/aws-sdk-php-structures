<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\EnableOperatorApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuerUrl
 * @property string $clientId
 * @property string $operatorAppRoleArn
 * @property string $provider
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class IdpAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     issuerUrl: string,
     *     clientId: string,
     *     operatorAppRoleArn: string,
     *     provider: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
