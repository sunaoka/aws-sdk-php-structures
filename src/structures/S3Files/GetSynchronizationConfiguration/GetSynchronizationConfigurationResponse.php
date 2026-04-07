<?php

namespace Sunaoka\Aws\Structures\S3Files\GetSynchronizationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $latestVersionNumber
 * @property list<Shapes\ImportDataRule> $importDataRules
 * @property list<Shapes\ExpirationDataRule> $expirationDataRules
 */
class GetSynchronizationConfigurationResponse extends Response
{
}
