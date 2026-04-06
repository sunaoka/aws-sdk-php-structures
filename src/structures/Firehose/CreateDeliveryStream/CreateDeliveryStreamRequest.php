<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property 'DirectPut'|'KinesisStreamAsSource'|null $DeliveryStreamType
 * @property Shapes\KinesisStreamSourceConfiguration|null $KinesisStreamSourceConfiguration
 * @property Shapes\DeliveryStreamEncryptionConfigurationInput|null $DeliveryStreamEncryptionConfigurationInput
 * @property Shapes\S3DestinationConfiguration|null $S3DestinationConfiguration
 * @property Shapes\ExtendedS3DestinationConfiguration|null $ExtendedS3DestinationConfiguration
 * @property Shapes\RedshiftDestinationConfiguration|null $RedshiftDestinationConfiguration
 * @property Shapes\ElasticsearchDestinationConfiguration|null $ElasticsearchDestinationConfiguration
 * @property Shapes\AmazonopensearchserviceDestinationConfiguration|null $AmazonopensearchserviceDestinationConfiguration
 * @property Shapes\SplunkDestinationConfiguration|null $SplunkDestinationConfiguration
 * @property Shapes\HttpEndpointDestinationConfiguration|null $HttpEndpointDestinationConfiguration
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\AmazonOpenSearchServerlessDestinationConfiguration|null $AmazonOpenSearchServerlessDestinationConfiguration
 */
class CreateDeliveryStreamRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     DeliveryStreamType?: 'DirectPut'|'KinesisStreamAsSource'|null,
     *     KinesisStreamSourceConfiguration?: Shapes\KinesisStreamSourceConfiguration|null,
     *     DeliveryStreamEncryptionConfigurationInput?: Shapes\DeliveryStreamEncryptionConfigurationInput|null,
     *     S3DestinationConfiguration?: Shapes\S3DestinationConfiguration|null,
     *     ExtendedS3DestinationConfiguration?: Shapes\ExtendedS3DestinationConfiguration|null,
     *     RedshiftDestinationConfiguration?: Shapes\RedshiftDestinationConfiguration|null,
     *     ElasticsearchDestinationConfiguration?: Shapes\ElasticsearchDestinationConfiguration|null,
     *     AmazonopensearchserviceDestinationConfiguration?: Shapes\AmazonopensearchserviceDestinationConfiguration|null,
     *     SplunkDestinationConfiguration?: Shapes\SplunkDestinationConfiguration|null,
     *     HttpEndpointDestinationConfiguration?: Shapes\HttpEndpointDestinationConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AmazonOpenSearchServerlessDestinationConfiguration?: Shapes\AmazonOpenSearchServerlessDestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
