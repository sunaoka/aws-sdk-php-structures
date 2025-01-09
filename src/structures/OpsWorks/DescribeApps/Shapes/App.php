<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppId
 * @property string $StackId
 * @property string $Shortname
 * @property string $Name
 * @property string $Description
 * @property list<DataSource> $DataSources
 * @property 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other' $Type
 * @property Source $AppSource
 * @property list<string> $Domains
 * @property bool $EnableSsl
 * @property SslConfiguration $SslConfiguration
 * @property array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string> $Attributes
 * @property string $CreatedAt
 * @property list<EnvironmentVariable> $Environment
 */
class App extends Shape
{
    /**
     * @param array{
     *     AppId?: string,
     *     StackId?: string,
     *     Shortname?: string,
     *     Name?: string,
     *     Description?: string,
     *     DataSources?: list<DataSource>,
     *     Type?: 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other',
     *     AppSource?: Source,
     *     Domains?: list<string>,
     *     EnableSsl?: bool,
     *     SslConfiguration?: SslConfiguration,
     *     Attributes?: array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string>,
     *     CreatedAt?: string,
     *     Environment?: list<EnvironmentVariable>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
