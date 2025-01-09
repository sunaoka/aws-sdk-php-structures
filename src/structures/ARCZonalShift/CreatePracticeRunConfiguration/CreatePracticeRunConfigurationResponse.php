<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CreatePracticeRunConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property Shapes\PracticeRunConfiguration $practiceRunConfiguration
 * @property 'ENABLED'|'DISABLED' $zonalAutoshiftStatus
 */
class CreatePracticeRunConfigurationResponse extends Response
{
}
