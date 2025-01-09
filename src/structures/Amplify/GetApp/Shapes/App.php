<?php

namespace Sunaoka\Aws\Structures\Amplify\GetApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $appArn
 * @property string $name
 * @property array<string, string> $tags
 * @property string $description
 * @property string $repository
 * @property 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE' $platform
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $iamServiceRoleArn
 * @property array<string, string> $environmentVariables
 * @property string $defaultDomain
 * @property bool $enableBranchAutoBuild
 * @property bool $enableBranchAutoDeletion
 * @property bool $enableBasicAuth
 * @property string $basicAuthCredentials
 * @property list<CustomRule> $customRules
 * @property ProductionBranch $productionBranch
 * @property string $buildSpec
 * @property string $customHeaders
 * @property bool $enableAutoBranchCreation
 * @property list<string> $autoBranchCreationPatterns
 * @property AutoBranchCreationConfig $autoBranchCreationConfig
 * @property 'SSH'|'TOKEN'|'SIGV4' $repositoryCloneMethod
 * @property CacheConfig $cacheConfig
 * @property \Aws\Api\DateTimeResult $webhookCreateTime
 * @property WafConfiguration $wafConfiguration
 */
class App extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     appArn: string,
     *     name: string,
     *     tags?: array<string, string>,
     *     description: string,
     *     repository: string,
     *     platform: 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE',
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     iamServiceRoleArn?: string,
     *     environmentVariables: array<string, string>,
     *     defaultDomain: string,
     *     enableBranchAutoBuild: bool,
     *     enableBranchAutoDeletion?: bool,
     *     enableBasicAuth: bool,
     *     basicAuthCredentials?: string,
     *     customRules?: list<CustomRule>,
     *     productionBranch?: ProductionBranch,
     *     buildSpec?: string,
     *     customHeaders?: string,
     *     enableAutoBranchCreation?: bool,
     *     autoBranchCreationPatterns?: list<string>,
     *     autoBranchCreationConfig?: AutoBranchCreationConfig,
     *     repositoryCloneMethod?: 'SSH'|'TOKEN'|'SIGV4',
     *     cacheConfig?: CacheConfig,
     *     webhookCreateTime?: \Aws\Api\DateTimeResult,
     *     wafConfiguration?: WafConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
