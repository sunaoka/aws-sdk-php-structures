<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string|null $Name
 * @property string|null $Description
 * @property list<Shapes\DataSource>|null $DataSources
 * @property 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other'|null $Type
 * @property Shapes\Source|null $AppSource
 * @property list<string>|null $Domains
 * @property bool|null $EnableSsl
 * @property Shapes\SslConfiguration|null $SslConfiguration
 * @property array<'DocumentRoot'|'RailsEnv'|'AutoBundleOnDeploy'|'AwsFlowRubySettings', string>|null $Attributes
 * @property list<Shapes\EnvironmentVariable>|null $Environment
 */
class UpdateAppRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     DataSources?: list<Shapes\DataSource>|null,
     *     Type?: 'aws-flow-ruby'|'java'|'rails'|'php'|'nodejs'|'static'|'other'|null,
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
