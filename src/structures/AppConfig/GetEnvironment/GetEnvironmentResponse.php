<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'READY_FOR_DEPLOYMENT'|'DEPLOYING'|'ROLLING_BACK'|'ROLLED_BACK'|'REVERTED'|null $State
 * @property list<Shapes\Monitor>|null $Monitors
 */
class GetEnvironmentResponse extends Response
{
}
