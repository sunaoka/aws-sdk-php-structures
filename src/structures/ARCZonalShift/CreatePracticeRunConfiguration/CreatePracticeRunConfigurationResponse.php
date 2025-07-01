<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CreatePracticeRunConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $zonalAutoshiftStatus
 * @property Shapes\PracticeRunConfiguration $practiceRunConfiguration
 */
class CreatePracticeRunConfigurationResponse extends Response
{
}
