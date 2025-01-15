<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRepositoryAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationArn
 * @property string|null $ConnectionArn
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimeStamp
 * @property string|null $AssociationId
 * @property string|null $Name
 * @property string|null $Owner
 * @property 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'|null $ProviderType
 * @property 'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'|null $State
 */
class RepositoryAssociationSummary extends Shape
{
    /**
     * @param array{
     *     AssociationArn?: string|null,
     *     ConnectionArn?: string|null,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     AssociationId?: string|null,
     *     Name?: string|null,
     *     Owner?: string|null,
     *     ProviderType?: 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'|null,
     *     State?: 'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
