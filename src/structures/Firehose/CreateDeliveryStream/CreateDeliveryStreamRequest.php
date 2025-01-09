<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource' $DeliveryStreamType
 * @property Shapes\KinesisStreamSourceConfiguration $KinesisStreamSourceConfiguration
 * @property Shapes\DeliveryStreamEncryptionConfigurationInput $DeliveryStreamEncryptionConfigurationInput
 * @property Shapes\S3DestinationConfiguration $S3DestinationConfiguration
 * @property Shapes\ExtendedS3DestinationConfiguration $ExtendedS3DestinationConfiguration
 * @property Shapes\RedshiftDestinationConfiguration $RedshiftDestinationConfiguration
 * @property Shapes\ElasticsearchDestinationConfiguration $ElasticsearchDestinationConfiguration
 * @property Shapes\AmazonopensearchserviceDestinationConfiguration $AmazonopensearchserviceDestinationConfiguration
 * @property Shapes\SplunkDestinationConfiguration $SplunkDestinationConfiguration
 * @property Shapes\HttpEndpointDestinationConfiguration $HttpEndpointDestinationConfiguration
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\AmazonOpenSearchServerlessDestinationConfiguration $AmazonOpenSearchServerlessDestinationConfiguration
 * @property Shapes\MSKSourceConfiguration $MSKSourceConfiguration
 * @property Shapes\SnowflakeDestinationConfiguration $SnowflakeDestinationConfiguration
 * @property Shapes\IcebergDestinationConfiguration $IcebergDestinationConfiguration
 * @property Shapes\DatabaseSourceConfiguration $DatabaseSourceConfiguration
 */
class CreateDeliveryStreamRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     DeliveryStreamType?: 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource',
     *     KinesisStreamSourceConfiguration?: Shapes\KinesisStreamSourceConfiguration,
     *     DeliveryStreamEncryptionConfigurationInput?: Shapes\DeliveryStreamEncryptionConfigurationInput,
     *     S3DestinationConfiguration?: Shapes\S3DestinationConfiguration,
     *     ExtendedS3DestinationConfiguration?: Shapes\ExtendedS3DestinationConfiguration,
     *     RedshiftDestinationConfiguration?: Shapes\RedshiftDestinationConfiguration,
     *     ElasticsearchDestinationConfiguration?: Shapes\ElasticsearchDestinationConfiguration,
     *     AmazonopensearchserviceDestinationConfiguration?: Shapes\AmazonopensearchserviceDestinationConfiguration,
     *     SplunkDestinationConfiguration?: Shapes\SplunkDestinationConfiguration,
     *     HttpEndpointDestinationConfiguration?: Shapes\HttpEndpointDestinationConfiguration,
     *     Tags?: list<Shapes\Tag>,
     *     AmazonOpenSearchServerlessDestinationConfiguration?: Shapes\AmazonOpenSearchServerlessDestinationConfiguration,
     *     MSKSourceConfiguration?: Shapes\MSKSourceConfiguration,
     *     SnowflakeDestinationConfiguration?: Shapes\SnowflakeDestinationConfiguration,
     *     IcebergDestinationConfiguration?: Shapes\IcebergDestinationConfiguration,
     *     DatabaseSourceConfiguration?: Shapes\DatabaseSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
