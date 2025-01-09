<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'READY_FOR_DEPLOYMENT'|'DEPLOYING'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED' $State
 * @property list<Shapes\Monitor> $Monitors
 */
class GetEnvironmentResponse extends Response
{
}
