<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $repository
 * @property 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE' $platform
 * @property string $iamServiceRoleArn
 * @property string $oauthToken
 * @property string $accessToken
 * @property array<string, string> $environmentVariables
 * @property bool $enableBranchAutoBuild
 * @property bool $enableBranchAutoDeletion
 * @property bool $enableBasicAuth
 * @property string $basicAuthCredentials
 * @property list<Shapes\CustomRule> $customRules
 * @property array<string, string> $tags
 * @property string $buildSpec
 * @property string $customHeaders
 * @property bool $enableAutoBranchCreation
 * @property list<string> $autoBranchCreationPatterns
 * @property Shapes\AutoBranchCreationConfig $autoBranchCreationConfig
 * @property Shapes\CacheConfig $cacheConfig
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     repository?: string,
     *     platform?: 'WEB'|'WEB_DYNAMIC'|'WEB_COMPUTE',
     *     iamServiceRoleArn?: string,
     *     oauthToken?: string,
     *     accessToken?: string,
     *     environmentVariables?: array<string, string>,
     *     enableBranchAutoBuild?: bool,
     *     enableBranchAutoDeletion?: bool,
     *     enableBasicAuth?: bool,
     *     basicAuthCredentials?: string,
     *     customRules?: list<Shapes\CustomRule>,
     *     tags?: array<string, string>,
     *     buildSpec?: string,
     *     customHeaders?: string,
     *     enableAutoBranchCreation?: bool,
     *     autoBranchCreationPatterns?: list<string>,
     *     autoBranchCreationConfig?: Shapes\AutoBranchCreationConfig,
     *     cacheConfig?: Shapes\CacheConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
