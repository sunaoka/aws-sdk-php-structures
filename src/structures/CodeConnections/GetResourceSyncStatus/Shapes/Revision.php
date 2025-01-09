<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetResourceSyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Branch
 * @property string $Directory
 * @property string $OwnerId
 * @property string $RepositoryName
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $Sha
 */
class Revision extends Shape
{
    /**
     * @param array{
     *     Branch: string,
     *     Directory: string,
     *     OwnerId: string,
     *     RepositoryName: string,
     *     ProviderType: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     Sha: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
