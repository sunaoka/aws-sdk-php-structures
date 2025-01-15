<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeRepositoryAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $AssociationArn
 * @property string|null $ConnectionArn
 * @property string|null $Name
 * @property string|null $Owner
 * @property 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'|null $ProviderType
 * @property 'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'|null $State
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimeStamp
 * @property \Aws\Api\DateTimeResult|null $CreatedTimeStamp
 * @property KMSKeyDetails|null $KMSKeyDetails
 * @property S3RepositoryDetails|null $S3RepositoryDetails
 */
class RepositoryAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     AssociationArn?: string|null,
     *     ConnectionArn?: string|null,
     *     Name?: string|null,
     *     Owner?: string|null,
     *     ProviderType?: 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket'|null,
     *     State?: 'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated'|null,
     *     StateReason?: string|null,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     KMSKeyDetails?: KMSKeyDetails|null,
     *     S3RepositoryDetails?: S3RepositoryDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
