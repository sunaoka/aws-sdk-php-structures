<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $name
 * @property string $description
 * @property 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE' $platform
 * @property string $iamServiceRoleArn
 * @property array<string, string> $environmentVariables
 * @property bool $enableBranchAutoBuild
 * @property bool $enableBranchAutoDeletion
 * @property bool $enableBasicAuth
 * @property string $basicAuthCredentials
 * @property list<Shapes\CustomRule> $customRules
 * @property string $buildSpec
 * @property string $customHeaders
 * @property bool $enableAutoBranchCreation
 * @property list<string> $autoBranchCreationPatterns
 * @property Shapes\AutoBranchCreationConfig $autoBranchCreationConfig
 * @property string $repository
 * @property string $oauthToken
 * @property string $accessToken
 * @property Shapes\CacheConfig $cacheConfig
 */
class UpdateAppRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     name?: string,
     *     description?: string,
     *     platform?: 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE',
     *     iamServiceRoleArn?: string,
     *     environmentVariables?: array<string, string>,
     *     enableBranchAutoBuild?: bool,
     *     enableBranchAutoDeletion?: bool,
     *     enableBasicAuth?: bool,
     *     basicAuthCredentials?: string,
     *     customRules?: list<Shapes\CustomRule>,
     *     buildSpec?: string,
     *     customHeaders?: string,
     *     enableAutoBranchCreation?: bool,
     *     autoBranchCreationPatterns?: list<string>,
     *     autoBranchCreationConfig?: Shapes\AutoBranchCreationConfig,
     *     repository?: string,
     *     oauthToken?: string,
     *     accessToken?: string,
     *     cacheConfig?: Shapes\CacheConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
