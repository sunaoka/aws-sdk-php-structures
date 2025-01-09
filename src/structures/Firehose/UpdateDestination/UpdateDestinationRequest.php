<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property string $CurrentDeliveryStreamVersionId
 * @property string $DestinationId
 * @property Shapes\S3DestinationUpdate $S3DestinationUpdate
 * @property Shapes\ExtendedS3DestinationUpdate $ExtendedS3DestinationUpdate
 * @property Shapes\RedshiftDestinationUpdate $RedshiftDestinationUpdate
 * @property Shapes\ElasticsearchDestinationUpdate $ElasticsearchDestinationUpdate
 * @property Shapes\AmazonopensearchserviceDestinationUpdate $AmazonopensearchserviceDestinationUpdate
 * @property Shapes\SplunkDestinationUpdate $SplunkDestinationUpdate
 * @property Shapes\HttpEndpointDestinationUpdate $HttpEndpointDestinationUpdate
 * @property Shapes\AmazonOpenSearchServerlessDestinationUpdate $AmazonOpenSearchServerlessDestinationUpdate
 * @property Shapes\SnowflakeDestinationUpdate $SnowflakeDestinationUpdate
 * @property Shapes\IcebergDestinationUpdate $IcebergDestinationUpdate
 */
class UpdateDestinationRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     CurrentDeliveryStreamVersionId: string,
     *     DestinationId: string,
     *     S3DestinationUpdate?: Shapes\S3DestinationUpdate,
     *     ExtendedS3DestinationUpdate?: Shapes\ExtendedS3DestinationUpdate,
     *     RedshiftDestinationUpdate?: Shapes\RedshiftDestinationUpdate,
     *     ElasticsearchDestinationUpdate?: Shapes\ElasticsearchDestinationUpdate,
     *     AmazonopensearchserviceDestinationUpdate?: Shapes\AmazonopensearchserviceDestinationUpdate,
     *     SplunkDestinationUpdate?: Shapes\SplunkDestinationUpdate,
     *     HttpEndpointDestinationUpdate?: Shapes\HttpEndpointDestinationUpdate,
     *     AmazonOpenSearchServerlessDestinationUpdate?: Shapes\AmazonOpenSearchServerlessDestinationUpdate,
     *     SnowflakeDestinationUpdate?: Shapes\SnowflakeDestinationUpdate,
     *     IcebergDestinationUpdate?: Shapes\IcebergDestinationUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
