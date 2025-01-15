<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationOutput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationARN
 * @property int<1, 999999999>|null $ApplicationVersionId
 * @property list<Shapes\OutputDescription>|null $OutputDescriptions
 */
class AddApplicationOutputResponse extends Response
{
}
