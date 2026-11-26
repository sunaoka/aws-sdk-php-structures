<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'envoy'|null $type
 * @property string|null $proxyVersion
 * @property string|null $dnsName
 * @property string|null $roleArn
 * @property Shapes\ProxyNetworkConfiguration|null $networkConfiguration
 * @property Shapes\ProxyStatus|null $status
 * @property Shapes\ConfigurationMetadata|null $configurationMetadata
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $customerKmsKeyArn
 */
class GetProxyResponse extends Response
{
}
