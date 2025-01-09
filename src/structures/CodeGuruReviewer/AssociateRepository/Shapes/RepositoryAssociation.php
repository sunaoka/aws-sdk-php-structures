<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $AssociationArn
 * @property string $ConnectionArn
 * @property string $Name
 * @property string $Owner
 * @property 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket' $ProviderType
 * @property 'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated' $State
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimeStamp
 * @property \Aws\Api\DateTimeResult $CreatedTimeStamp
 * @property KMSKeyDetails $KMSKeyDetails
 * @property S3RepositoryDetails $S3RepositoryDetails
 */
class RepositoryAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     AssociationArn?: string,
     *     ConnectionArn?: string,
     *     Name?: string,
     *     Owner?: string,
     *     ProviderType?: 'CodeCommit'|'GitHub'|'Bitbucket'|'GitHubEnterpriseServer'|'S3Bucket',
     *     State?: 'Associated'|'Associating'|'Failed'|'Disassociating'|'Disassociated',
     *     StateReason?: string,
     *     LastUpdatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     CreatedTimeStamp?: \Aws\Api\DateTimeResult,
     *     KMSKeyDetails?: KMSKeyDetails,
     *     S3RepositoryDetails?: S3RepositoryDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
