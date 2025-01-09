<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationARN
 * @property int<1, 999999999> $ApplicationVersionId
 * @property list<Shapes\InputDescription> $InputDescriptions
 */
class AddApplicationInputResponse extends Response
{
}
