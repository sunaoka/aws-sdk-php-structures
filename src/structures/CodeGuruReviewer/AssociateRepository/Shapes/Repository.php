<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeCommitRepository|null $CodeCommit
 * @property ThirdPartySourceRepository|null $Bitbucket
 * @property ThirdPartySourceRepository|null $GitHubEnterpriseServer
 * @property S3Repository|null $S3Bucket
 */
class Repository extends Shape
{
    /**
     * @param array{
     *     CodeCommit?: CodeCommitRepository|null,
     *     Bitbucket?: ThirdPartySourceRepository|null,
     *     GitHubEnterpriseServer?: ThirdPartySourceRepository|null,
     *     S3Bucket?: S3Repository|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
