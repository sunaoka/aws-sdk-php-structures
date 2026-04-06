<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $image
 * @property int|null $containerPort
 * @property ExpressGatewayServiceAwsLogsConfiguration|null $awsLogsConfiguration
 * @property ExpressGatewayRepositoryCredentials|null $repositoryCredentials
 * @property list<string>|null $command
 * @property list<KeyValuePair>|null $environment
 * @property list<Secret>|null $secrets
 */
class ExpressGatewayContainer extends Shape
{
    /**
     * @param array{
     *     image: string,
     *     containerPort?: int|null,
     *     awsLogsConfiguration?: ExpressGatewayServiceAwsLogsConfiguration|null,
     *     repositoryCredentials?: ExpressGatewayRepositoryCredentials|null,
     *     command?: list<string>|null,
     *     environment?: list<KeyValuePair>|null,
     *     secrets?: list<Secret>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
