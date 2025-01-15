<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationId
 * @property S3DestinationDescription|null $S3DestinationDescription
 * @property ExtendedS3DestinationDescription|null $ExtendedS3DestinationDescription
 * @property RedshiftDestinationDescription|null $RedshiftDestinationDescription
 * @property ElasticsearchDestinationDescription|null $ElasticsearchDestinationDescription
 * @property AmazonopensearchserviceDestinationDescription|null $AmazonopensearchserviceDestinationDescription
 * @property SplunkDestinationDescription|null $SplunkDestinationDescription
 * @property HttpEndpointDestinationDescription|null $HttpEndpointDestinationDescription
 * @property SnowflakeDestinationDescription|null $SnowflakeDestinationDescription
 * @property AmazonOpenSearchServerlessDestinationDescription|null $AmazonOpenSearchServerlessDestinationDescription
 * @property IcebergDestinationDescription|null $IcebergDestinationDescription
 */
class DestinationDescription extends Shape
{
    /**
     * @param array{
     *     DestinationId: string,
     *     S3DestinationDescription?: S3DestinationDescription|null,
     *     ExtendedS3DestinationDescription?: ExtendedS3DestinationDescription|null,
     *     RedshiftDestinationDescription?: RedshiftDestinationDescription|null,
     *     ElasticsearchDestinationDescription?: ElasticsearchDestinationDescription|null,
     *     AmazonopensearchserviceDestinationDescription?: AmazonopensearchserviceDestinationDescription|null,
     *     SplunkDestinationDescription?: SplunkDestinationDescription|null,
     *     HttpEndpointDestinationDescription?: HttpEndpointDestinationDescription|null,
     *     SnowflakeDestinationDescription?: SnowflakeDestinationDescription|null,
     *     AmazonOpenSearchServerlessDestinationDescription?: AmazonOpenSearchServerlessDestinationDescription|null,
     *     IcebergDestinationDescription?: IcebergDestinationDescription|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
