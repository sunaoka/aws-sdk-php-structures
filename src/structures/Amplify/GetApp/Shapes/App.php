<?php

namespace Sunaoka\Aws\Structures\Amplify\GetApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $appArn
 * @property string $name
 * @property array<string, string>|null $tags
 * @property string $description
 * @property string $repository
 * @property 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE' $platform
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string|null $iamServiceRoleArn
 * @property array<string, string> $environmentVariables
 * @property string $defaultDomain
 * @property bool $enableBranchAutoBuild
 * @property bool|null $enableBranchAutoDeletion
 * @property bool $enableBasicAuth
 * @property string|null $basicAuthCredentials
 * @property list<CustomRule>|null $customRules
 * @property ProductionBranch|null $productionBranch
 * @property string|null $buildSpec
 * @property string|null $customHeaders
 * @property bool|null $enableAutoBranchCreation
 * @property list<string>|null $autoBranchCreationPatterns
 * @property AutoBranchCreationConfig|null $autoBranchCreationConfig
 * @property 'SSH'|'TOKEN'|'SIGV4'|null $repositoryCloneMethod
 * @property CacheConfig|null $cacheConfig
 * @property \Aws\Api\DateTimeResult|null $webhookCreateTime
 * @property WafConfiguration|null $wafConfiguration
 */
class App extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     appArn: string,
     *     name: string,
     *     tags?: array<string, string>|null,
     *     description: string,
     *     repository: string,
     *     platform: 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE',
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     iamServiceRoleArn?: string|null,
     *     environmentVariables: array<string, string>,
     *     defaultDomain: string,
     *     enableBranchAutoBuild: bool,
     *     enableBranchAutoDeletion?: bool|null,
     *     enableBasicAuth: bool,
     *     basicAuthCredentials?: string|null,
     *     customRules?: list<CustomRule>|null,
     *     productionBranch?: ProductionBranch|null,
     *     buildSpec?: string|null,
     *     customHeaders?: string|null,
     *     enableAutoBranchCreation?: bool|null,
     *     autoBranchCreationPatterns?: list<string>|null,
     *     autoBranchCreationConfig?: AutoBranchCreationConfig|null,
     *     repositoryCloneMethod?: 'SSH'|'TOKEN'|'SIGV4'|null,
     *     cacheConfig?: CacheConfig|null,
     *     webhookCreateTime?: \Aws\Api\DateTimeResult|null,
     *     wafConfiguration?: WafConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
