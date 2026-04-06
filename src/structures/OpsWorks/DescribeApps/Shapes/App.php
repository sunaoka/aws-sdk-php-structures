<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppId
 * @property string|null $StackId
 * @property string|null $Shortname
 * @property string|null $Name
 * @property string|null $Description
 * @property list<DataSource>|null $DataSources
 * @property 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other'|null $Type
 * @property Source|null $AppSource
 * @property list<string>|null $Domains
 * @property bool|null $EnableSsl
 * @property SslConfiguration|null $SslConfiguration
 * @property array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string>|null $Attributes
 * @property string|null $CreatedAt
 * @property list<EnvironmentVariable>|null $Environment
 */
class App extends Shape
{
    /**
     * @param array{
     *     AppId?: string|null,
     *     StackId?: string|null,
     *     Shortname?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     DataSources?: list<DataSource>|null,
     *     Type?: 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other'|null,
     *     AppSource?: Source|null,
     *     Domains?: list<string>|null,
     *     EnableSsl?: bool|null,
     *     SslConfiguration?: SslConfiguration|null,
     *     Attributes?: array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string>|null,
     *     CreatedAt?: string|null,
     *     Environment?: list<EnvironmentVariable>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
