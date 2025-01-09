<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiDescription
 * @property string $ApiId
 * @property string $ApiKey
 * @property string $ApiName
 * @property string $ApiSpecificationMd5Hash
 * @property string $DataSetId
 * @property 'REST' $ProtocolType
 * @property string $RevisionId
 * @property string $Stage
 */
class ImportAssetFromApiGatewayApiRequestDetails extends Shape
{
    /**
     * @param array{
     *     ApiDescription?: string,
     *     ApiId: string,
     *     ApiKey?: string,
     *     ApiName: string,
     *     ApiSpecificationMd5Hash: string,
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
