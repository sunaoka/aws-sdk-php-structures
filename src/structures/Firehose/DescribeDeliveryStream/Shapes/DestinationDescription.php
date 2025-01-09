<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationId
 * @property S3DestinationDescription $S3DestinationDescription
 * @property ExtendedS3DestinationDescription $ExtendedS3DestinationDescription
 * @property RedshiftDestinationDescription $RedshiftDestinationDescription
 * @property ElasticsearchDestinationDescription $ElasticsearchDestinationDescription
 * @property AmazonopensearchserviceDestinationDescription $AmazonopensearchserviceDestinationDescription
 * @property SplunkDestinationDescription $SplunkDestinationDescription
 * @property HttpEndpointDestinationDescription $HttpEndpointDestinationDescription
 * @property SnowflakeDestinationDescription $SnowflakeDestinationDescription
 * @property AmazonOpenSearchServerlessDestinationDescription $AmazonOpenSearchServerlessDestinationDescription
 * @property IcebergDestinationDescription $IcebergDestinationDescription
 */
class DestinationDescription extends Shape
{
    /**
     * @param array{
     *     DestinationId: string,
     *     S3DestinationDescription?: S3DestinationDescription,
     *     ExtendedS3DestinationDescription?: ExtendedS3DestinationDescription,
     *     RedshiftDestinationDescription?: RedshiftDestinationDescription,
     *     ElasticsearchDestinationDescription?: ElasticsearchDestinationDescription,
     *     AmazonopensearchserviceDestinationDescription?: AmazonopensearchserviceDestinationDescription,
     *     SplunkDestinationDescription?: SplunkDestinationDescription,
     *     HttpEndpointDestinationDescription?: HttpEndpointDestinationDescription,
     *     SnowflakeDestinationDescription?: SnowflakeDestinationDescription,
     *     AmazonOpenSearchServerlessDestinationDescription?: AmazonOpenSearchServerlessDestinationDescription,
     *     IcebergDestinationDescription?: IcebergDestinationDescription
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
