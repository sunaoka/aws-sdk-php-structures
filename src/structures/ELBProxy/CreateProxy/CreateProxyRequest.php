<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'envoy' $type
 * @property string $proxyVersion
 * @property string $roleArn
 * @property Shapes\ProxyConfiguration $configuration
 * @property Shapes\ProxyNetworkUserConfiguration $networkConfiguration
 * @property list<Shapes\Attribute>|null $attributes
 * @property string|null $customerKmsKeyArn
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateProxyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'envoy',
     *     proxyVersion: string,
     *     roleArn: string,
     *     configuration: Shapes\ProxyConfiguration,
     *     networkConfiguration: Shapes\ProxyNetworkUserConfiguration,
     *     attributes?: list<Shapes\Attribute>|null,
     *     customerKmsKeyArn?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
