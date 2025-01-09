<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeCommitRepository $CodeCommit
 * @property ThirdPartySourceRepository $Bitbucket
 * @property ThirdPartySourceRepository $GitHubEnterpriseServer
 * @property S3Repository $S3Bucket
 */
class Repository extends Shape
{
    /**
     * @param array{
     *     CodeCommit?: CodeCommitRepository,
     *     Bitbucket?: ThirdPartySourceRepository,
     *     GitHubEnterpriseServer?: ThirdPartySourceRepository,
     *     S3Bucket?: S3Repository
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
