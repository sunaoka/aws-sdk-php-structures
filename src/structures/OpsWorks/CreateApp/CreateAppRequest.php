<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string|null $Shortname
 * @property string $Name
 * @property string|null $Description
 * @property list<Shapes\DataSource>|null $DataSources
 * @property 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other' $Type
 * @property Shapes\Source|null $AppSource
 * @property list<string>|null $Domains
 * @property bool|null $EnableSsl
 * @property Shapes\SslConfiguration|null $SslConfiguration
 * @property array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string>|null $Attributes
 * @property list<Shapes\EnvironmentVariable>|null $Environment
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     Shortname?: string|null,
     *     Name: string,
     *     Description?: string|null,
     *     DataSources?: list<Shapes\DataSource>|null,
     *     Type: 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other',
     *     AppSource?: Shapes\Source|null,
     *     Domains?: list<string>|null,
     *     EnableSsl?: bool|null,
     *     SslConfiguration?: Shapes\SslConfiguration|null,
     *     Attributes?: array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string>|null,
     *     Environment?: list<Shapes\EnvironmentVariable>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
