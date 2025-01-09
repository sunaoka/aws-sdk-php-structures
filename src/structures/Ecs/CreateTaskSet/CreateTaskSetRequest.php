<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateTaskSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $service
 * @property string $cluster
 * @property string $externalId
 * @property string $taskDefinition
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property list<Shapes\LoadBalancer> $loadBalancers
 * @property list<Shapes\ServiceRegistry> $serviceRegistries
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property list<Shapes\CapacityProviderStrategyItem> $capacityProviderStrategy
 * @property string $platformVersion
 * @property Shapes\Scale $scale
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreateTaskSetRequest extends Request
{
    /**
     * @param array{
     *     service: string,
     *     cluster: string,
     *     externalId?: string,
     *     taskDefinition: string,
     *     networkConfiguration?: Shapes\NetworkConfiguration,
     *     loadBalancers?: list<Shapes\LoadBalancer>,
     *     serviceRegistries?: list<Shapes\ServiceRegistry>,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     capacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>,
     *     platformVersion?: string,
     *     scale?: Shapes\Scale,
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
