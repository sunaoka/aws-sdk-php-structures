<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $repository
 * @property 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE'|null $platform
 * @property string|null $computeRoleArn
 * @property string|null $iamServiceRoleArn
 * @property string|null $oauthToken
 * @property string|null $accessToken
 * @property array<string, string>|null $environmentVariables
 * @property bool|null $enableBranchAutoBuild
 * @property bool|null $enableBranchAutoDeletion
 * @property bool|null $enableBasicAuth
 * @property string|null $basicAuthCredentials
 * @property list<Shapes\CustomRule>|null $customRules
 * @property array<string, string>|null $tags
 * @property string|null $buildSpec
 * @property string|null $customHeaders
 * @property bool|null $enableAutoBranchCreation
 * @property list<string>|null $autoBranchCreationPatterns
 * @property Shapes\AutoBranchCreationConfig|null $autoBranchCreationConfig
 * @property Shapes\JobConfig|null $jobConfig
 * @property Shapes\CacheConfig|null $cacheConfig
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     repository?: string|null,
     *     platform?: 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE'|null,
     *     computeRoleArn?: string|null,
     *     iamServiceRoleArn?: string|null,
     *     oauthToken?: string|null,
     *     accessToken?: string|null,
     *     environmentVariables?: array<string, string>|null,
     *     enableBranchAutoBuild?: bool|null,
     *     enableBranchAutoDeletion?: bool|null,
     *     enableBasicAuth?: bool|null,
     *     basicAuthCredentials?: string|null,
     *     customRules?: list<Shapes\CustomRule>|null,
     *     tags?: array<string, string>|null,
     *     buildSpec?: string|null,
     *     customHeaders?: string|null,
     *     enableAutoBranchCreation?: bool|null,
     *     autoBranchCreationPatterns?: list<string>|null,
     *     autoBranchCreationConfig?: Shapes\AutoBranchCreationConfig|null,
     *     jobConfig?: Shapes\JobConfig|null,
     *     cacheConfig?: Shapes\CacheConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
