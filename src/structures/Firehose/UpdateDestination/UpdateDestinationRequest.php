<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property string $CurrentDeliveryStreamVersionId
 * @property string $DestinationId
 * @property Shapes\S3DestinationUpdate|null $S3DestinationUpdate
 * @property Shapes\ExtendedS3DestinationUpdate|null $ExtendedS3DestinationUpdate
 * @property Shapes\RedshiftDestinationUpdate|null $RedshiftDestinationUpdate
 * @property Shapes\ElasticsearchDestinationUpdate|null $ElasticsearchDestinationUpdate
 * @property Shapes\AmazonopensearchserviceDestinationUpdate|null $AmazonopensearchserviceDestinationUpdate
 * @property Shapes\SplunkDestinationUpdate|null $SplunkDestinationUpdate
 * @property Shapes\HttpEndpointDestinationUpdate|null $HttpEndpointDestinationUpdate
 * @property Shapes\AmazonOpenSearchServerlessDestinationUpdate|null $AmazonOpenSearchServerlessDestinationUpdate
 * @property Shapes\SnowflakeDestinationUpdate|null $SnowflakeDestinationUpdate
 * @property Shapes\IcebergDestinationUpdate|null $IcebergDestinationUpdate
 */
class UpdateDestinationRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     CurrentDeliveryStreamVersionId: string,
     *     DestinationId: string,
     *     S3DestinationUpdate?: Shapes\S3DestinationUpdate|null,
     *     ExtendedS3DestinationUpdate?: Shapes\ExtendedS3DestinationUpdate|null,
     *     RedshiftDestinationUpdate?: Shapes\RedshiftDestinationUpdate|null,
     *     ElasticsearchDestinationUpdate?: Shapes\ElasticsearchDestinationUpdate|null,
     *     AmazonopensearchserviceDestinationUpdate?: Shapes\AmazonopensearchserviceDestinationUpdate|null,
     *     SplunkDestinationUpdate?: Shapes\SplunkDestinationUpdate|null,
     *     HttpEndpointDestinationUpdate?: Shapes\HttpEndpointDestinationUpdate|null,
     *     AmazonOpenSearchServerlessDestinationUpdate?: Shapes\AmazonOpenSearchServerlessDestinationUpdate|null,
     *     SnowflakeDestinationUpdate?: Shapes\SnowflakeDestinationUpdate|null,
     *     IcebergDestinationUpdate?: Shapes\IcebergDestinationUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
