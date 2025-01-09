<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRepositoryAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationArn
 * @property string $ConnectionArn
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimeStamp
 * @property string $AssociationId
 * @property string $Name
 * @property string $Owner
 * @property 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket' $ProviderType
 * @property 'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated' $State
 */
class RepositoryAssociationSummary extends Shape
{
    /**
     * @param array{
     *     AssociationArn?: string,
     *     ConnectionArn?: string,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     AssociationId?: string,
     *     Name?: string,
     *     Owner?: string,
     *     ProviderType?: 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket',
     *     State?: 'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
