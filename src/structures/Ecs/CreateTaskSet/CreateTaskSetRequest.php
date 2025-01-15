<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateTaskSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $service
 * @property string $cluster
 * @property string|null $externalId
 * @property string $taskDefinition
 * @property Shapes\NetworkConfiguration|null $networkConfiguration
 * @property list<Shapes\LoadBalancer>|null $loadBalancers
 * @property list<Shapes\ServiceRegistry>|null $serviceRegistries
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|null $launchType
 * @property list<Shapes\CapacityProviderStrategyItem>|null $capacityProviderStrategy
 * @property string|null $platformVersion
 * @property Shapes\Scale|null $scale
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateTaskSetRequest extends Request
{
    /**
     * @param array{
     *     service: string,
     *     cluster: string,
     *     externalId?: string|null,
     *     taskDefinition: string,
     *     networkConfiguration?: Shapes\NetworkConfiguration|null,
     *     loadBalancers?: list<Shapes\LoadBalancer>|null,
     *     serviceRegistries?: list<Shapes\ServiceRegistry>|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|null,
     *     capacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>|null,
     *     platformVersion?: string|null,
     *     scale?: Shapes\Scale|null,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
