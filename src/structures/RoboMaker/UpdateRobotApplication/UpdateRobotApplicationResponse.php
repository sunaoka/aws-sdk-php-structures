<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateRobotApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property list<Shapes\Source>|null $sources
 * @property Shapes\RobotSoftwareSuite|null $robotSoftwareSuite
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $revisionId
 * @property Shapes\Environment|null $environment
 */
class UpdateRobotApplicationResponse extends Response
{
}
