<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $Shortname
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\DataSource> $DataSources
 * @property 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other' $Type
 * @property Shapes\Source $AppSource
 * @property list<string> $Domains
 * @property bool $EnableSsl
 * @property Shapes\SslConfiguration $SslConfiguration
 * @property array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string> $Attributes
 * @property list<Shapes\EnvironmentVariable> $Environment
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     Shortname?: string,
     *     Name: string,
     *     Description?: string,
     *     DataSources?: list<Shapes\DataSource>,
     *     Type: 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other',
     *     AppSource?: Shapes\Source,
     *     Domains?: list<string>,
     *     EnableSsl?: bool,
     *     SslConfiguration?: Shapes\SslConfiguration,
     *     Attributes?: array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string>,
     *     Environment?: list<Shapes\EnvironmentVariable>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
