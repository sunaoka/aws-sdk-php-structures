<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiDescription
 * @property string $ApiId
 * @property string|null $ApiKey
 * @property string $ApiName
 * @property string $ApiSpecificationMd5Hash
 * @property string $ApiSpecificationUploadUrl
 * @property \Aws\Api\DateTimeResult $ApiSpecificationUploadUrlExpiresAt
 * @property string $DataSetId
 * @property 'REST' $ProtocolType
 * @property string $RevisionId
 * @property string $Stage
 */
class ImportAssetFromApiGatewayApiResponseDetails extends Shape
{
    /**
     * @param array{
     *     ApiDescription?: string|null,
     *     ApiId: string,
     *     ApiKey?: string|null,
     *     ApiName: string,
     *     ApiSpecificationMd5Hash: string,
     *     ApiSpecificationUploadUrl: string,
     *     ApiSpecificationUploadUrlExpiresAt: \Aws\Api\DateTimeResult,
     *     DataSetId: string,
     *     ProtocolType: 'REST',
     *     RevisionId: string,
     *     Stage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
