<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationReferenceDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationARN
 * @property int<1, 999999999> $ApplicationVersionId
 * @property list<Shapes\ReferenceDataSourceDescription> $ReferenceDataSourceDescriptions
 */
class AddApplicationReferenceDataSourceResponse extends Response
{
}
