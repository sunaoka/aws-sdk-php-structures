<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery;

class ServiceDiscoveryClient extends \Aws\ServiceDiscovery\ServiceDiscoveryClient
{
    use CreateHttpNamespace\CreateHttpNamespaceTrait;
    use CreatePrivateDnsNamespace\CreatePrivateDnsNamespaceTrait;
    use CreatePublicDnsNamespace\CreatePublicDnsNamespaceTrait;
    use CreateService\CreateServiceTrait;
    use DeleteNamespace\DeleteNamespaceTrait;
    use DeleteService\DeleteServiceTrait;
    use DeregisterInstance\DeregisterInstanceTrait;
    use DiscoverInstances\DiscoverInstancesTrait;
    use GetInstance\GetInstanceTrait;
    use GetInstancesHealthStatus\GetInstancesHealthStatusTrait;
    use GetNamespace\GetNamespaceTrait;
    use GetOperation\GetOperationTrait;
    use GetService\GetServiceTrait;
    use ListInstances\ListInstancesTrait;
    use ListNamespaces\ListNamespacesTrait;
    use ListOperations\ListOperationsTrait;
    use ListServices\ListServicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterInstance\RegisterInstanceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateHttpNamespace\UpdateHttpNamespaceTrait;
    use UpdateInstanceCustomHealthStatus\UpdateInstanceCustomHealthStatusTrait;
    use UpdatePrivateDnsNamespace\UpdatePrivateDnsNamespaceTrait;
    use UpdatePublicDnsNamespace\UpdatePublicDnsNamespaceTrait;
    use UpdateService\UpdateServiceTrait;
}
