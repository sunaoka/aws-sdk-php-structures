<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListRepositoryLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionArn
 * @property string $EncryptionKeyArn
 * @property string $OwnerId
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $RepositoryLinkArn
 * @property string $RepositoryLinkId
 * @property string $RepositoryName
 */
class RepositoryLinkInfo extends Shape
{
    /**
     * @param array{
     *     ConnectionArn: string,
     *     EncryptionKeyArn?: string,
     *     OwnerId: string,
     *     ProviderType: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     RepositoryLinkArn: string,
     *     RepositoryLinkId: string,
     *     RepositoryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
