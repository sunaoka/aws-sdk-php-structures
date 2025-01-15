<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FeatureGroupArn
 * @property string $FeatureGroupName
 * @property string $FeatureName
 * @property 'Integral'|'Fractional'|'String' $FeatureType
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $Description
 * @property list<Shapes\FeatureParameter>|null $Parameters
 */
class DescribeFeatureMetadataResponse extends Response
{
}
