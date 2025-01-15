<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationReferenceDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationARN
 * @property int<1, 999999999>|null $ApplicationVersionId
 * @property list<Shapes\ReferenceDataSourceDescription>|null $ReferenceDataSourceDescriptions
 */
class AddApplicationReferenceDataSourceResponse extends Response
{
}
