<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationOutput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationARN
 * @property int<1, 999999999> $ApplicationVersionId
 * @property list<Shapes\OutputDescription> $OutputDescriptions
 */
class AddApplicationOutputResponse extends Response
{
}
