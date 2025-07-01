<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdatePracticeRunConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $zonalAutoshiftStatus
 * @property Shapes\PracticeRunConfiguration $practiceRunConfiguration
 */
class UpdatePracticeRunConfigurationResponse extends Response
{
}
