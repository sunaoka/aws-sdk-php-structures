<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationARN
 * @property int<1, 999999999>|null $ApplicationVersionId
 * @property list<Shapes\InputDescription>|null $InputDescriptions
 */
class AddApplicationInputResponse extends Response
{
}
